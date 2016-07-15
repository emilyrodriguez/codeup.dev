<?php
function pageController()
{
    $data = [];
    $data['randomAdjective'] = ['awesome', 'legendary', 'great', 'cool', 'amazing'];
    $data['randomNoun'] = ['php', 'javascript', 'css', 'html', 'mysql'];
    $data['random'] =$data['randomAdjective'][mt_rand(0, count($data['randomAdjective']) - 1)]. " " . $data['randomNoun'][mt_rand(0, count($data['randomNoun']) - 1)];
    return $data;
}
extract(pageController());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>Server name generator</title>
</head>
<body>
    <h1><?= $random ?></h1>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>