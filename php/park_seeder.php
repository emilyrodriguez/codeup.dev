<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_db');
define('DB_PASS', 'parks');
require("db_connect.php");
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$list = "TRUNCATE national_parks";
$dbc->exec($list);

$parks = [
['name' => 'Acadia','location' => 'Maine','date_established' => '1919-02-26','area_in_acres' => '47389.67', 'description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.',],
['name' => 'American Samoa','location' => 'American Samoa','date_established' => '1988-10-31','area_in_acres' => '9000.00', 'description' => 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches. The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.',],
['name' => 'Arches','location' => 'Utah','date_established' => '1929-04-12','area_in_acres' => '76518.98', 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.',],
['name' => 'Badlands','location' => 'South Dakota','date_established' => '1978-11-10','area_in_acres' => '242755.94', 'description' => 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world''s richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes.',],
['name' => 'Big Bend','location' => 'Texas','date_established' => '1944-06-12','area_in_acres' => '801163.21', 'description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.',],
['name' => 'Biscayne','location' => 'Florida','date_established' => '1980-06-28','area_in_acres' => '172924.07', 'description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. Threatened animals include the West Indian manatee, American crocodile, various sea turtles, and peregrine falcon.',],
['name' => 'Black Canyon of the Gunnison','location' => 'Colorado','date_established' => '1999-10-21','area_in_acres' => '32950.03', 'description' => 'The park protects a quarter of the Gunnison River, which slices sheer canyon walls from dark Precambrian-era rock. The canyon features incredibly steep descents, and is a popular site for river rafting and rock climbing. The deep, narrow canyon, made of gneiss and schist, is often in shadow and therefore appears black.',],
['name' => 'Bryce Canyon','location' => 'Utah','date_established' => '1928-02-25','area_in_acres' => '35835.08', 'description' => 'Bryce Canyon is a giant geological amphitheater on the Paunsaugunt Plateau. The unique area has hundreds of tall sandstone hoodoos formed by erosion. The region was originally settled by Native Americans and later by Mormon pioneers.',],
['name' => 'Canyonlands','location' => 'Utah','date_established' => '1964-09-12','area_in_acres' => '337597.83',],
['name' => 'Capitol Reef','location' => 'Utah','date_established' => '1971-12-18','area_in_acres' => '241904.26',],
['name' => 'Carlsbad Caverns','location' => 'New Mexico','date_established' => '1930-05-14','area_in_acres' => '46766.45',],
['name' => 'Channel Islands','location' => 'California','date_established' => '1980-03-05','area_in_acres' => '249561.00',],
['name' => 'Congaree','location' => 'South Carolina','date_established' => '2003-11-10','area_in_acres' => '26545.86',],
['name' => 'Crater Lake','location' => 'Oregon','date_established' => '1902-05-22','area_in_acres' => '183224.05',],
['name' => 'Cuyahoga Valley','location' => 'Ohio','date_established' => '2000-10-11','area_in_acres' => '32860.73',],
['name' => 'Death Valley','location' => 'California','date_established' => '1994-10-31','area_in_acres' => '3372401.96',],
['name' => 'Denali','location' => 'Alaska','date_established' => '1917-02-26','area_in_acres' => '4740911.72',],
['name' => 'Dry Tortugas','location' => 'Florida','date_established' => '1992-10-26','area_in_acres' => '64701.22',],
['name' => 'Everglades','location' => 'Florida','date_established' => '1934-05-30','area_in_acres' => '1508537.90',],
['name' => 'Gates of the Arctic','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '7523897.74',],
['name' => 'Glacier','location' => 'Montana','date_established' => '1910-05-11','area_in_acres' => '1013572.41',],
['name' => 'Glacier Bay','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '3224840.31',],
['name' => 'Grand Canyon','location' => 'Arizona','date_established' => '1919-02-26','area_in_acres' => '1217403.32',],
['name' => 'Grand Teton','location' => 'Wyoming','date_established' => '1929-02-26','area_in_acres' => '309994.66',],
['name' => 'Great Basin','location' => 'Nevada','date_established' => '1986-10-27','area_in_acres' => '77180.00',],
['name' => 'Great Sand Dunes','location' => 'Colorado','date_established' => '2004-09-13','area_in_acres' => '42983.74',],
['name' => 'Great Smoky Mountains','location' => 'North Carolina','date_established' => '1934-06-15','area_in_acres' => '521490.13',],
['name' => 'Guadalupe Mountains','location' => 'Texas','date_established' => '1966-10-15','area_in_acres' => '86415.97',],
['name' => 'Haleakalā','location' => 'Hawaii','date_established' => '1916-08-01','area_in_acres' => '29093.67',],
['name' => 'Hawaii Volcanoes','location' => 'Hawaii','date_established' => '1916-08-01','area_in_acres' => '323431.38',],
['name' => 'Hot Springs','location' => 'Arkansas','date_established' => '1921-03-04','area_in_acres' => '5549.75',],
['name' => 'Isle Royale','location' => 'Michigan','date_established' => '1940-04-03','area_in_acres' => '571790.11',],
['name' => 'Joshua Tree','location' => 'California','date_established' => '1994-10-31','area_in_acres' => '789745.47',],
['name' => 'Katmai','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '3674529.68',],
['name' => 'Kenai Fjords','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '669982.99',],
['name' => 'Kings Canyon','location' => 'California','date_established' => '1940-03-04','area_in_acres' => '461901.20',],
['name' => 'Kobuk Valley','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '1750716.50',],
['name' => 'Lake Clark','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '2619733.21',],
['name' => 'Lassen Volcanic','location' => 'California','date_established' => '1916-08-09','area_in_acres' => '106372.36',],
['name' => 'Mammoth Cave','location' => 'Kentucky','date_established' => '1941-07-01','area_in_acres' => '52830.19',],
['name' => 'Mesa Verde','location' => 'Colorado','date_established' => '1906-06-29','area_in_acres' => '52121.93',],
['name' => 'Mount Rainier','location' => 'Washington','date_established' => '1899-03-02','area_in_acres' => '235625.00',],
['name' => 'North Cascades','location' => 'Washington','date_established' => '1968-10-02','area_in_acres' => '504780.94',],
['name' => 'Olympic','location' => 'Washington','date_established' => '1938-06-29','area_in_acres' => '922650.86',],
['name' => 'Petrified Forest','location' => 'Arizona','date_established' => '1962-12-09','area_in_acres' => '93532.57',],
['name' => 'Pinnacles','location' => 'California','date_established' => '2013-01-10','area_in_acres' => '26605.73',],
['name' => 'Redwood','location' => 'California','date_established' => '1968-10-02','area_in_acres' => '112512.05',],
['name' => 'Rocky Mountain','location' => 'Colorado','date_established' => '1915-01-26','area_in_acres' => '265828.41',],
['name' => 'Saguaro','location' => 'Arizona','date_established' => '1994-10-14','area_in_acres' => '91439.71',],
['name' => 'Sequoia','location' => 'California','date_established' => '1890-09-25','area_in_acres' => '404051.17',],
['name' => 'Shenandoah','location' => 'Virginia','date_established' => '1926-05-22','area_in_acres' => '199045.23',],
['name' => 'Theodore Roosevelt','location' => 'North Dakota','date_established' => '1978-11-10','area_in_acres' => '70446.89',],
['name' => 'Virgin Islands','location' => 'United States Virgin Islands','date_established' => '1956-08-02','area_in_acres' => '14688.87',],
['name' => 'Voyageurs','location' => 'Minnesota','date_established' => '1971-01-08','area_in_acres' => '218200.17',],
['name' => 'Wind Cave','location' => 'South Dakota','date_established' => '1903-01-09','area_in_acres' => '28295.03',],
['name' => 'Wrangell–​St. Elias','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '8323147.59',],
['name' => 'Yellowstone','location' => 'Wyoming','date_established' => '1872-03-01','area_in_acres' => '2219790.71',],
['name' => 'Yosemite','location' => 'California','date_established' => '1890-10-01','area_in_acres' => '761266.19',],
['name' => 'Zion','location' => 'Utah','date_established' => '1919-11-19','area_in_acres' => '146597.60',],
 ];

$insert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description') VALUES (:name, :location, :date_established, :area_in_acres, :description);
foreach ($parks as $park) {
	$statement->bindValue(':name,', $park['name'], PDO::PARAM_STR);
	$statement->bindValue(':location,', $park['location'], PDO::PARAM_STR);
	$statement->bindValue(':date_established,', $park['date_established'], PDO::PARAM_STR);
	$statement->bindValue(':area_in_acres,', $park['area_in_acres'], PDO::PARAM_STR);
	$statement->bindValue(':description,', $park['description'], PDO::PARAM_STR);
	$statement->execute();
}
$dbc->exec(trim($insert, ', '));