<?php
// This part sets up the connection to the
// database (so you don't need to reopen the connection
// again on the same page).
$conn=odbc_connect("Dotalyzer","","") or die (odbc_errormsg());
if (!$conn )
{
    exit
    ("Error connecting to database: ".$conn);
}
// Then you need to make sure the database you want
// is selected.
$sql = "SELECT * FROM users";
$rs=odbc_exec($conn,$sql);
?>