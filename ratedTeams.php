<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    // redirect to your login page
    header("Location: login.php");
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
?>
<!DOCTYPE html>
<html>
<head>

    <title>DotaLyzer</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<?php
include "Includes/menu.php";
$sql = "SELECT * FROM teams ORDER BY 'rate' DESC , 'count' DESC ";
$herolist = array("hero1","hero2","hero3","hero4","hero5");

$result = $mysqli->query($sql);
?>
<div id="team-content">
    <?php
    if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
    echo $row['user']."    ";
    foreach ($herolist as $hero){?>

    <div class="heroimage_wrapper">

        <a href="javascript:void(0)" class="heroimage-link">
            <?php
            echo " <img src='Hero%20icons/".$row["$hero"].".png' class='heroimage'>
                        </a>

                </div>";
            }
            echo $row["description"];
            echo "||||||||||||";
            echo "Rating:".$row["rate"]/($row["count"]+1);
            echo "<br>";

            }
            } else {
                echo "0 results";
            }
            $mysqli->close();
            ?>
    </div>
</body>
</html>