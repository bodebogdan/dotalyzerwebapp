<?php
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

    <title>DotaLyzer</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.button').click(function(){
                var clickBtnValue = $(this).val();
                var id = $(this).attr('data-unique-id');
                var ajaxurl = 'ajax/ajax',
                    data =  {
                        'action': clickBtnValue,
                        'id': id
                    };
                    console.log(clickBtnValue);
                $.post(ajaxurl, data, function (response) {
                    // Response div goes here.
                    alert(response.replace('\\n', '\n'));
                });
            });

        });
    </script>

</head>
<body>


<?php
include "Includes/menu.php";
?>

<div id="content">
      <input type="submit" class="button" name="match" value="match" data-unique-id="<?= $unique_id ?>" /></div>
</body>
</html>