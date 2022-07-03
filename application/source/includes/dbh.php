<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=logindb;host=login-database';
$username = "root";
$pass = "root";

$pdo = new PDO($dsn,$username,$pass);
