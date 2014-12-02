<!DOCTYPE html>

<head>

    <title>Login</title>
    <link href="../style.css"  rel="stylesheet"/>
    <script type="text/javascript" src="../scripts/log.js">
    </script>

</head>
<body>

<?php
include "database.php";
include "Includes/menu.php"
?>
<form method="post" name="registration" action="../myteams.php" class="login" onsubmit="return validate(this);">
    <p id="login-wrapper">
        <label for="login">Email:</label>
        <input type="text" name="login" id="login" >
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>

    <p class="login-submit">
        <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password"><a href="../index.php">Forgot your password?</a></p>
</form>

</body>
</html>
