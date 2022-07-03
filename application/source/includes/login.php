<?php
    include_once 'dbh.php';
    include_once 'register.php';

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM student;";
                $result = $pdo ->query($sql);

                foreach ($pdo->query($sql) as $row) {
                    if($row['username'] == $username & $row['password'] == $password){
                        exit(header("Location: ../index.php?signup=successlogin"));
                    } else {
                        echo 'Wrong pemail or password';
                    }

                }