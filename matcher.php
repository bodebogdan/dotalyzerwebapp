<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$unique_id = generateRandomString(32);
?>


<!DOCTYPE html>
<html>
<head>
<?php
?>
    <title>DotaLyzer</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/matcher.js"></script>
    <script>
        $(document).ready(function(){
            $('.match-button').click(function(){
                var clickBtnValue = $(this).val();
                var id = $(this).attr('data-unique-id');
                var ajaxurl = 'ajax/ajax',
                    data =  {
                        'action': clickBtnValue,
                        'id': id
                    };
                    console.log(clickBtnValue);
                $.post(ajaxurl, data, function (response) {
                    var heroes = null;
                    heroes = $.parseJSON(response);
                    var html = '';
                    console.log(response)
                    console.log(heroes)
                    $.each(heroes, function(i){
                        if(i == 6)
                            return;

                        html += '<img src="Hero Icons/' + this + '" class="heroimage heroimage-small">';

                    })

                    $('#content').prepend(html);
                });
                $('.match-button').hide();
            });

        });

    </script>


</head>
<body>


<?php
include "Includes/menu.php";
?>

<div id="content" style="text-align:center;">
      <input type="submit" class="match-button" name="match" value="match" data-unique-id="<?= $unique_id ?>" />
</div>
</body>
</html>