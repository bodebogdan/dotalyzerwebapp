<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();



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

        $('document').ready(function(){
            var heroes = {};
            var index;
            $('#save-team').attr('disabled', 'true');
            var $activelink;
            $('.heroimage-link').click(function(){
                 index = $(this).parent().index();

                $(this).addClass('chosen');
                var imageSource = $('img', $(this)).attr('src');
                $activelink = $(this);
                toggle_visibility('popup');

                $('.hero-popup-image-link img[src="'+imageSource+'"]').parent().removeClass('inactive');


            });

            $('.hero-popup-image-link').click(function(){
                if(!$(this).hasClass('inactive')){
                    var imageSource = $('img', $(this)).attr('src');
                    toggle_visibility('popup');
                    $('img', $activelink).attr('src', imageSource);
                    $(this).addClass('inactive');

                    heroes[index] = $(this).attr('data-heroname');

                    if(Object.keys(heroes).length == 5){
                        $('#heroes').val(JSON.stringify(heroes));
                        $('#save-team').removeAttr("disabled");
                    }
                }
            })
        })
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
        <a href="javascript:void(0)" class="heroimage-link">
            <?php echo " <img src='pics/Basic_hero.png' class='heroimage'>
                        </a>

                </div>";
            $i += 1;
            }
            ?>

    </div>

    <form style="padding-left:770px ; padding-top:380px; font-family: Arial; font-size: 17px ;" method="POST" action="saveteam.php">
        <input name="heroes" id="heroes" type="hidden"/>
        <strong>Description:</strong><br><br>
        <textarea name="description" style="color:#000000 ; background-color:#373737 ; font-family: Arial; font-size: 17px" rows="5" cols="40" id="description"></textarea>
        <br>
        <input type="submit" class="button" name="submit" value="Save Team" id="save-team" />
    </form>
</div>


<div id="popup" class="popup-position">
    <?php    while (odbc_fetch_row($rs)) {
    $heroimage = odbc_result($rs, "Portrait");
    $heroname = odbc_result($rs, "HeroName");
    ?>
    <div id="popup-wrapper" class='heroimage_wrapper'>
        <a href="javascript:void(0)" class="hero-popup-image-link" data-heroname="<?php echo $heroimage; ?>">
            <?php echo " <img src='Hero icons/$heroimage.png' class='heroimage'>
                        </a>

                </div>";
            }
            odbc_close($conn);

            ?>
    </div>


</body>
</html>