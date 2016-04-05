<?php 
require('function.php');

$conn = mysqli_connect(HOST, USER, PWD, CGBD);
//Json for category
$query =  "SELECT * FROM categories";
$rows = array();
$result = mysqli_query($conn, $query);
while($r = mysqli_fetch_assoc($result)) {
	$rows[] = $r;
}
$fp = fopen('api/categories.json', 'w');
fwrite($fp, json_encode($rows));
fclose($fp);
//print json_encode($rows, JSON_PRETTY_PRINT);



//Json for places
$conn = mysqli_connect(HOST, USER, PWD, CGBD);
//Json for category
$query =  "SELECT * FROM places";
$rows = array();
$result = mysqli_query($conn, $query);
while($r = mysqli_fetch_assoc($result)) {
	$rows[] = $r;
}
$fp = fopen('api/places.json', 'w');
fwrite($fp, json_encode($rows));
fclose($fp);



//Json for spots
$conn = mysqli_connect(HOST, USER, PWD, CGBD);
//Json for category
$query =  "SELECT * FROM spots";
$rows = array();
$result = mysqli_query($conn, $query);
while($r = mysqli_fetch_assoc($result)) {
	$rows[] = $r;
}
$fp = fopen('api/spots.json', 'w');
fwrite($fp, json_encode($rows));
fclose($fp);




?>

