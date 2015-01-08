<?php
/**
 * Created by PhpStorm.
 * User: Bodecrysis
 * Date: 08/01/2015
 * Time: 11:42
 */
define("HOST2", "localhost");     // The host you want to connect to.
define("USER2", "root");    // The database username.
define("PASSWORD2", "");    // The database password.
define("DATABASE2", "dotalyzer");    // The database name.

define("CAN_REGISTER2", "any");
define("TABLE2", "teams");

define("SECURE2", FALSE);    // FOR DEVELOPMENT ONLY!!!!

$mysqli = new mysqli(HOST2, USER2, PASSWORD2, DATABASE2);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


echo "morcov";
if(isset($_GET['team'] , $_GET['rating'])){
    $team=$_GET['team'];
    $ratin=$_GET['rating'];
    echo "morcov";
    echo $ratin;
    echo $team;

    if(in_array($ratin,array(1,2,3,4,5))){
        $results=$mysqli->query("Select ID, rate, count FROM teams WHERE ID={$team}");

        $exists = $results->num_rows ? true : false;

        if($exists){
            $row=$results->fetch_assoc();
            $rating=$row['rate']+ $ratin;
            $count=$row['count'] + 1;

            $mysqli->query("UPDATE teams SET rate={$rating}, count={$count} WHERE ID={$team};");

        }
    }

   header("Location: ratedTeams");

}

