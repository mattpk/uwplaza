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

	$query = "SELECT ID FROM users WHERE name = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s', $user);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows == 0) {
		$query = "INSERT INTO users (NAME) VALUES (?)";
		$stmt = $db->prepare($query);
		$stmt->execute();
		$user_id = $stmt->insert_id;
	} else {
		$stmt->bind_result($user_id);
		$stmt->fetch();
	}
	$stmt->close();

	$query = "SELECT ID FROM restaurants WHERE name = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s', $restaurant);
	$stmt->execute();
	$stmt->bind_result($restaurant_id);
	$stmt->fetch();
	$stmt->close();

	$query = "SELECT ID FROM dishes WHERE name = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s', $dish);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows == 0) {
		$query = "INSERT INTO dishes (NAME) VALUES (?)";
		$stmt = $db->prepare($query);
		$stmt->execute();
		$dish_id = $stmt->insert_id;
	} else {
		$stmt->bind_result($dish_id);
		$stmt->fetch();
	}
	$stmt->close();

	$query = "Insert into main (user_id, restaurant_id, dish_id, rating, review) values (?, ?, ?, ?, ?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param('iiiis', $user_id, $restaurant_id, $dish_id, $rating, $review);
	$stmt->execute();
	
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