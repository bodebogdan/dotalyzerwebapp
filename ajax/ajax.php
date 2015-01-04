<?php
/**
 * Created by PhpStorm.
 * User: Bodecrysis
 * Date: 30/11/2014
 * Time: 19:39
 */
if (isset ($_POST["action"], $_POST['id']) && $_POST['action'] == "match") {
    match();
}
function match()
{
    $matcher = "D://Projects//Dotalyzer Algorithm v1.0//ConsoleApplication3//ConsoleApplication3//bin//Debug//dotalyzer2.exe";
    $content = '';
    $result = array();
    exec($matcher, $result);

    $myfile = '../generated/' . $_POST['id'] . '.txt';

    for ($i = 0; $i < 5; $i++) {
        echo $result[$i] . "\n";
        $content .= $result[$i] . "\r\n";
    }
    displayTeam($content);
    file_put_contents($myfile, $content);

}

function displayTeam($heroes){



    $herolist = array();
    $i=0;
    $conn = odbc_connect('Dotalyzer', '', '');
    if (!$conn) {
        exit("Connection Failed: " . $conn);
    }
    $sql = "SELECT * FROM HeroStats ORDER BY Heroname";
    $rs = odbc_exec($conn, $sql);
    if (!$rs) {
        exit("Error in SQL");
    }



        foreach(preg_split("/((\r?\n)|(\r\n?))/", $heroes) as $line){
            while (odbc_fetch_row($rs)) {
                $heroname = odbc_result($rs, "HeroName");

                if ($line == $heroname) {

                    $heroimage = odbc_result($rs, "Portrait");
                    $herolist[$i++] = $heroimage . ".png";
                }
            }
        }



    odbc_close($conn);
   // var_dump($heroes);die;


    echo " <div class='heroimage_wrapper'>";
    for ($i = 0; $i < count($herolist); $i++) {
        echo " <img src='Hero icons/$herolist[$i]' class='heroimage'>";
    }

    echo " </div>";
}
?>