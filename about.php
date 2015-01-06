<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
    
?>
<!DOCTYPE html>
<html>
<head>

    <title>DotaLyzer</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<?php
include "Includes/menu.php"
?>
<div id="content">
<h3 style="text-align:center; "> Dotalyzer is a web application, built for DotA players who want to take their gameplay to the next level.</h3>
    <h3 style="text-align: center;">Using advanced algorithms and a solid database, we offer the possibility of generating high potential teams which will ensure that all your roles are covered.</h3>
    <h3 style="text-align: center;">We do not guarantee however that your win chances are 100%, at the end it all comes down at how good you can play the game, we only give you a suggestion for a proper line-up.</h3>
</div>
</body>
</html>