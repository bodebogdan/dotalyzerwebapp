<?php
$conn = odbc_connect('Dotalyzer', '', '');
if (!$conn) {
    exit("Connection Failed: " . $conn);
}

$sql = "SELECT * FROM HeroStats ORDER BY Heroname";
$rs = odbc_exec($conn, $sql);
if (!$rs) {
    exit("Error in SQL");
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
?>

<div id="content">
    <?php    while (odbc_fetch_row($rs)) {
        $heroimage = odbc_result($rs, "Portrait");
        ?>
        <div class='heroimage_wrapper'>
                        <a href='hero/<?php echo intval(odbc_result($rs,2))  ?>/<?php echo odbc_result($rs,4)?>'>
                            <?php echo" <img src='Hero icons/$heroimage.png' class='heroimage'>
                        </a>

                </div>";
     }
    odbc_close($conn);

    ?>
</div>
</body>
</html>