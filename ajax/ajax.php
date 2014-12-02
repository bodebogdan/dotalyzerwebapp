<?php
/**
 * Created by PhpStorm.
 * User: Bodecrysis
 * Date: 30/11/2014
 * Time: 19:39
 */
if( isset ($_POST["action"] , $_POST['id']) && $_POST['action'] == "match")
{
    match();
}
function match()
{
    $matcher="D://Projects//Dotalyzer Algorithm v1.0//ConsoleApplication3//ConsoleApplication3//bin//Debug//dotalyzer2.exe";

    $result = array();
    exec($matcher, $result);

    $myfile = '../generated/'.$_POST['id'] . '.txt';
    $content = '';
    for($i = 0; $i < 5; $i++){
        echo $result[$i] . "\n";
        $content .= $result[$i] . "\r\n";
    }

    file_put_contents($myfile, $content);
}

?>