<?php
require __DIR__ . '../php/park_migration.php';
require __DIR__ . '../php/db_connect.php';
require __DIR__ . '../src/Input.php';

function pageCount($itemsCount, $pageSize = 4) {
    return ceil($itemsCount / $pageSize);
}
function pageOffset($page, $pageSize = 4) {
    return ($page - 1) * $pageSize;
}
function parksCount(PDO $connection) {
    return $connection
        ->query('SELECT COUNT(*) FROM national_parks')
        ->fetchColumn()
    ;
}
function parksPage(PDO $connection, $page = 1, $pageSize = 4) {
    $statement = $connection
        ->prepare("SELECT * FROM national_parks LIMIT $pageSize OFFSET :offset")
    ;
    $statement->bindValue(':offset', pageOffset($page, $pageSize), PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll();
}
function pageController(PDO $connection) {
    $pageSize = 4;
    $pageCount = pageCount(parksCount($connection), $pageSize);
    $page = max([min([Input::get('page', 1), $pageCount]), 1]);
    $parks = parksPage($connection, $page, $pageSize);

    if (Input::isPost()) {
        $name = Input::get('name');
        $description = Input::get('description');
        $location = Input::get('location');
        $dateEstablished = Input::get('date_established');
        $areaInAcres = Input::get('area_in_acres');

        $insert = 'INSERT INTO national_parks (name, description, location, date_established, area_in_acres) VALUES (:name, :description, :location, :date_established, :area_in_acres)';
        $statement = $connection->prepare($insert);
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':description', $description, PDO::PARAM_STR);
        $statement->bindValue(':area_in_acres', $areaInAcres, PDO::PARAM_STR);
        $statement->bindValue(':location', $location, PDO::PARAM_STR);
        $statement->bindValue(':date_established', $dateEstablished, PDO::PARAM_STR);
        $statement->execute();
    }

    return [
        'page' => $page,
        'pageCount' => $pageCount,
        'parks' => $parks,
    ];
}
extract(pageController($dbc));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
            crossorigin="anonymous"
        >
        <title>National parks</title>
        <!--[if lt IE 9]>
              <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
              </script>
              <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
              </script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h1>National parks</h1>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Location</td>
                        <td>Date established</td>
                        <td>Area in acres</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($parks as $park) : ?>
                        <tr>
                            <td><?= $park['name'] ?></td>
                            <td><?= $park['location'] ?></td>
                            <td><?= $park['date_established'] ?></td>
                            <td><?= $park['area_in_acres'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <nav aria-label="Page navigation" class="text-center">
                                <ul class="pagination">
                                    <?php if ($page > 1) : ?>
                                    <li>
                                        <a href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php endif ?>
                                    <?php foreach (range(1, $pageCount) as $pageNumber) : ?>
                                        <li>
                                            <a href="?page=<?= $pageNumber ?>">
                                                <?= $pageNumber ?>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                    <?php if ($page < $pageCount) :?>
                                    <li>
                                        <a href="?page=<?= $page + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    <?php endif ?>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input
                        type="text"
                        class="form-control"
                        name="description"
                        id="description">
                </div>
                <div class="form-group">
                    <label for="date_established">Date established</label>
                    <input
                        type="date"
                        class="form-control"
                        name="date_established"
                        id="date_established">
                </div>
                <div class="form-group">
                    <label for="area_in_acres">Area in acres</label>
                    <input
                        type="text"
                        class="form-control"
                        name="area_in_acres"
                        id="area_in_acres">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input
                        type="text"
                        class="form-control"
                        name="location"
                        id="location">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
</html>