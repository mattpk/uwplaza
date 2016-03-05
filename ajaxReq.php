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
} else if ($req == 'add') {
	$user = htmlspecialchars($_POST['user']);
	$restaurant = htmlspecialchars($_POST['restaurant']);
	$dish = htmlspecialchars($_POST['dish']);
	$rating = intval(htmlspecialchars($_POST['rating']));
	$review = htmlspecialchars($_POST['review']);

	if (!$result = $db->query("SELECT ID FROM `users` WHERE name = '$user' limit 1")) {
		$db->query("INSERT INTO `users` (name) values ('$user')");
		$user_id = $db->insert_id;
	} else {
		$row = $result->fetch_assoc();
		$user_id = $row['ID'];
	}

	if (!$result = $db->query("SELECT ID FROM `restaurants` WHERE name = '$restaurant' limit 1")) {
		$db->query("INSERT INTO `restaurants` (name) values ('$restaurant')");
		$restaurant_id = $db->insert_id;
	} else {
		$row = $result->fetch_assoc();
		$restaurant_id = $row['ID'];
	}
	

	if (!$result = $db->query("SELECT ID FROM `dishes` WHERE name = '$dish' limit 1")) {
		$db->query("INSERT INTO `dishes` (name) values ('$dish')");
		$dish_id = $db->insert_id;
	} else {
		$row = $result->fetch_assoc();
		$dish_id = $row['ID'];
	}
	

	$db->query("Insert into main (user_id, restaurant_id, dish_id, rating, review) values ('$user_id', '$restaurant_id', '$dish_id', $rating, '$review')");
} else if ($req == 'rdishes') { // dishes from a specific restaurant
	$restaurant = $_POST['restaurant'];
	if (!$result = $db->query("SELECT DISTINCT dishes.name FROM main join dishes on main.dish_id = dishes.id WHERE main.restaurant_id = (SELECT id FROM restaurants WHERE name = '$restaurant')")) {
		die('sql fun. [' . $db->connect_error . ']');
	}
	while ($row = $result->fetch_assoc()) {
		$reply[] = $row['NAME'];
	}	
	echo json_encode($reply);
}

?>