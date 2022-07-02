<?php
function openConnection() {
	// Try to figure out what these should be for you
    $dsn = 'mysql:dbname=logindb;host=localhost';

	$dbusername = $_GET['username'];
	$dbpass = $_GET['password'];
    //$encrypted_pass = md5($pwd);

	// Try to understand what happens here
	$pdo = new PDO($dsn,$dbusername,$dbpass);

	// Why we do this here
	return $pdo;
}
if(isset($_GET['submit'])){
    echo "\n" . $_GET['username'];
    echo "\n". $_GET['password'];
    echo "\n". $_GET['email'];
}

?>
<html>
    <head>
        <title>Login Page Test </title>

    </head>
    <body>
        <form method="get" action="">
            <label for="username">Username
                <input type="text" placeholder="Your Username" name="username" value="">
            </label>
                <br>
            <label for="email">Email
                <input type="text" placeholder="Your Email" name="email" value="">
            </label>
                <br>
            <label for="password">Password
                <input type="password" name="password" value="">
            </label>
                <br>
            <input type="submit" name="submit" value="Register">
        </form>
    </body>
</html>