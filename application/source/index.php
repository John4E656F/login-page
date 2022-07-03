<?php
     include_once 'includes/dbh.php';
?>

<html>
    <head>
        <title>Login Page Test </title>

    </head>
    <body>

        <form method="POST" action="includes/register.php">
            <label for="username">Username
                <input type="text" placeholder="Your Username" name="username" >
            </label>
                <br>
            <label for="email">Email
                <input type="text" placeholder="Your Email" name="email" >
            </label>
                <br>
            <label for="password">Password
                <input type="password" name="password" >
            </label>
            <br>
            <label for="confirmpassword">Confirm Password
                <input type="password" name="confirmpassword" >
            </label>
                <br>
                <br>
            <label for="firstname">First Name
                <input type="text" name="firstname">
            </label>
            <br>
            <label for="lastname">Last Name
                <input type="text" name="lastname">
            </label>
            <br>
            <input type="submit" name="register" value="Register">
        </form>

        <!-- <form method="POST" action="includes/login.php">
            <label for="username">Username
                <input type="text" placeholder="Your Username" name="username" >
            </label>
                <br>
            <label for="password">Password
                <input type="password" name="password" >
            </label>
                <br>
            <input type="submit" name="login" value="Login">
        </form> -->
    </body>
</html>