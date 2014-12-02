<?php
$dbName = $_SERVER["DOCUMENT_ROOT"]."\\test.mdb";
$con = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");
$sql = "SELECT Photo FROM Clients WHERE id=?";
$st = $con->prepare($sql);
$st->execute(array(1));
$st->bindColumn(1, $photoChars, PDO::PARAM_LOB);
$st->fetch(PDO::FETCH_BOUND);

// $photoChars is a long string of hex, e.g., '424D7A...'

// PDO+Access_ODBC apparently injects a NULL every 255 characters,
//     so remove them first
$photoChars = str_replace("\0", "", $photoChars);

// create array of character pairs (e.g.: '42', '4D', '7A', ...)
$photoArray = str_split($photoChars, 2);

// convert to numeric values
for ($i = 0; $i < sizeof($photoArray); $i++) {
$photoArray[$i] = hexdec($photoArray[$i]);
}

// pack into binary string
//     ref: http://stackoverflow.com/a/5473057/2144390
$photoData = call_user_func_array("pack", array_merge(array("C*"), $photoArray));

header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_PNG));
header('Content-Disposition: attachment; filename="untitled.bmp"');
echo $photoData;
?>