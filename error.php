<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);

if (! $error) {
    $error = 'Oops! An unknown error happened.';
}
include "Includes/menu.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>An error has occured</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<h1 style="padding-top:200px; padding-left: 770px;">There was a problem</h1>
<p  style="padding-left: 350px; font-size:25px;">We appologise for the inconvenience. Our team of specially trained mokeys will look into the problem as soon as possible.</p>
</body>
</html>