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
<?php
$changed = 0;
?>
<head>

    <title>DotaLyzer</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';

        }
        //-->
    </script>

</head>
<body>
<?php
include "Includes/menu.php"
?>

<div id="team-content">
    <?php
    $i = 0;
    while ($i < 5) {
    ?>
    <div class="heroimage_wrapper">
        <a href="javascript:void(0)" onclick="toggle_visibility('popup');">
            <?php echo " <img src='pics/Basic_hero.png' class='heroimage'>
                        </a>

                </div>";
            $i += 1;
            }
            ?>

    </div>
    <p style="padding-left:770px ; padding-top:350px; font-family: Arial; font-size: 17px ;"><strong>Description:</strong><br><br>
    <textarea name="Description" style="color:#000000 ; background-color:#373737 ; font-family: Arial; font-size: 17px" rows="5" cols="40"></textarea>
        <br>
        <input type="submit" class="button" name="submit" value="Save Team" />
    </p>
</div>


<div id="popup" class="popup-position">
    <?php    while (odbc_fetch_row($rs)) {
    $heroimage = odbc_result($rs, "Portrait");
    ?>
    <div id="popup-wrapper" class='heroimage_wrapper'>
        <a href="javascript:void(0)" onclick="toggle_visibility('popup');">
            <?php echo " <img src='Hero icons/$heroimage.png' class='heroimage'>
                        </a>

                </div>";
            }
            odbc_close($conn);

            ?>
    </div>


</body>
</html>