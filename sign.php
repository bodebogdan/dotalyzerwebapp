<?php
include_once 'Includes/register.inc.php';
include_once 'Includes/functions.php';
?>
<!DOCTYPE html>

<head xmlns="http://www.w3.org/1999/html">

    <title>Sign-Up</title>
    <link href="style.css" rel="stylesheet"/>
    <script type="text/javascript" src="scripts/sign.js"></script>
    <script type="text/javascript" src="js/sha512.js"></script>
    <script type="text/javascript" src="js/forms.js"></script>
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

include "Includes/menu.php";

if (!empty($error_msg)) {
    echo $error_msg;
}
?>

<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" name="registration_form" method="post" class="login">
    <p id="login-wrapper">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="name@example.com">
    </p>

    <p>
        <label for="username">Display:</label>
        <input placeholder="Display Name" type="text" name="username" id="username">
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>

    <p>
        <label for="confirmpwd">Repeat:</label>
        <input type="password" name="confirmpwd" id="confirmpwd">
    </p>

    <p class="login-submit">
        <button type="submit" class="login-button"
                onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);">Register
        </button>

    </p>
    <p>
        I have read and I accept the <a href="javascript:void(0)" onclick="toggle_visibility('popup');">terms and
            conditions.</a><input name="agreement" type="checkbox"/>
    </p>
</form>
<div id="popup" class="popup-position">

    <div id="popup-terms">
        <div id="popup-container">
            <h4> This is a test for the terms</h4>
            <a href="javascript:void(0)" onclick="toggle_visibility('popup');">Understood<a>
        </div>


    </div>
</div>

</body>
</html>
