<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    // redirect to your login page
    header( "Location: login.php" );
}

define("HOST2", "localhost");     // The host you want to connect to.
define("USER2", "root");    // The database username.
define("PASSWORD2", "");    // The database password.
define("DATABASE2", "dotalyzer");    // The database name.

define("CAN_REGISTER2", "any");
define("TABLE2", "teams");

define("SECURE2", FALSE);    // FOR DEVELOPMENT ONLY!!!!
?>
<?php

$username = $_SESSION['username'];

$mysqli = new mysqli(HOST2, USER2, PASSWORD2, DATABASE2);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


$heroes = json_decode($_POST['heroes'], true);
$postdescription = $_POST['description'];

$description = filter_var($postdescription, FILTER_SANITIZE_STRING);

foreach ($heroes as $hero) {
    echo $hero;
    echo "<br>";
}


$sql = "INSERT INTO teams (hero1,hero2,hero3,hero4,hero5,description,user,count,rate)
VALUES ('$heroes[0]','$heroes[1]','$heroes[2]','$heroes[3]','$heroes[4]','$description','$username','0','0')";

//echo $description;
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
header("Location: myteams");
//query
//add to db
//yolo//yolo