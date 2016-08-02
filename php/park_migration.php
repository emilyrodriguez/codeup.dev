<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_db');
define('DB_PASS', 'parks');
require("db_connect.php");
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$parks = "DROP TABLE IF EXISTS national_parks";
$dbc->exec($parks);

$parkTable = "CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(60) NOT NULL,
	location VARCHAR(60) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE PRECISION(20,2) NOT NULL,
	PRIMARY KEY(id)
)";

$dbc->exec($parkTable);