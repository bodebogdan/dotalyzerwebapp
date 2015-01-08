<?php
/**
 * Created by PhpStorm.
 * User: Bodecrysis
 * Date: 24/11/2014
 * Time: 23:02
 */

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include "Includes/menu.php";

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Login: Log In</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body>
<?php
if (isset($_GET['error'])) {
    echo '<p class="error">Error Logging In!</p>';
}

?>
<p id="login-wrapper">
<form action="includes/process_login.php" method="post" name="login_form " class="login">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail: <input type="text" name="email" />
    <br>
    Password: <input type="password"
                     name="password"
                     id="password"/>
    <input type="button"
           value="Login"
           onclick="formhash(this.form, this.form.password);" />
</form>
</p>
<p style="text-align:center; position:relative; font-size:20px;">If you don't have a login, please <a href="sign.php">register</a></p>
</body>
</html>