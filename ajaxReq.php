<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$name = substr($url["path"], 1);
$db = new mysqli($server, $username, $password, $name);
// check that connection was successful
if($db->connect_errno > 0) {
	die('Unable to connect to database [' . $db->connect_error . ']');
}
$req = htmlspecialchars($_POST['req']);


if ($req == "restaurants") {
	if (!$result = $db->query("SELECT NAME FROM `Restaurants`")) {
		die('Unable to load deck list. [' . $db->connect_error . ']');
	}
	while ($row = $result->fetch_assoc()) {
		$reply[] = $row['NAME'];
	}	
	echo json_encode($reply);
} else if ($req == 'global') {
	if (!$result = $db->query("SELECT users.name as user, restaurants.name as restaurant, dishes.name as dish, rating, review FROM main inner join users on users.id = main.user_id inner join restaurants on restaurants.id = main.restaurant_id inner join dishes on dishes.id = main.dish_id")) {
		die('Unable to load deck list. [' . $db->connect_error . ']');
	}
	while ($row = $result->fetch_assoc()) {
		$reply[] = $row;
	}	
	echo json_encode($reply);
}/* else if ($req == 'add') {
	$name = $_POS['']
}*/

?>