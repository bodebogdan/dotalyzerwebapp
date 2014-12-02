<?php

$ID = filter_input(INPUT_GET, 'ID', FILTER_SANITIZE_NUMBER_INT);
$name =  filter_input(INPUT_GET, 'HeroName', FILTER_SANITIZE_STRING);

$conn = odbc_connect('Dotalyzer', '', '');
if (!$conn) {
    exit("Connection Failed: " . $conn);
}

$sql = "SELECT * FROM HeroStats WHERE ID=$ID";
$rs = odbc_exec($conn, $sql);
if (!$rs) {
    exit("Error in SQL");
}
?>
<!DOCTYPE html>
<html>
<head>

    <title>DotaLyzer</title>
    <link href="../../style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<?php
$navfolder = '../../';
include "Includes/menu.php";

?>

<div id="herodiv">
    <?php
    $heroimage = odbc_result($rs, "Portrait");
    $carry = odbc_result($rs, 5);
    $durable = odbc_result($rs, 6);
    $disabler = odbc_result($rs, 7);
    $support = odbc_result($rs, 8);
    $escape = odbc_result($rs, 9);
    $initiator = odbc_result($rs, 10);
    $jungler = odbc_result($rs, 11);
    $lane_support = odbc_result($rs, 12);
    $nuker = odbc_result($rs, 13);
    $pusher = odbc_result($rs, 14);
    $score = $carry + $durable + $disabler + $support + $escape + $initiator + $jungler + $lane_support + $nuker + $pusher;


    echo "<p class='hero_paragraph'>";
    echo  odbc_result($rs, 4);
    echo "</p>";
   echo "
<img src='/Hero icons/$heroimage.png' alt='' >";



    ?>
</div>
<div id="stats">
    <?php
    if ($carry != 0)
        echo 'Carry Score:' . $carry . '<br/>';
    if ($durable != 0)

        echo 'Durable Score:' . $durable . '<br/>';
    if ($disabler != 0)
        echo 'Disabler Score:' . $disabler . '<br/>';
    if ($support != 0)
        echo 'Support Score:' . $support . '<br/>';
    if ($escape != 0)
        echo 'Escape Score:' . $escape . '<br/>';
    if ($initiator != 0)
        echo 'Initiator Score:' . $initiator . '<br/>';
    if ($jungler != 0)
        echo 'Jungler Score:' . $jungler . '<br/>';
    if ($lane_support != 0)
        echo 'Lane support Score:' . $lane_support . '<br/>';
    if ($nuker != 0)
        echo 'Nuker Score:' . $nuker . '<br/>';
    if ($pusher != 0)
        echo 'Pusher Score:' . $pusher . '<br/>';
    echo 'Total hero Score is :' . $score

    ?>

</div>

<?php
odbc_close($conn);
?>

</body>
</html>