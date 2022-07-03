<?php
    if(isset($_POST["register"])){
        include_once 'dbh.php';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmpassword'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        require_once 'dbh.php';
        require_once 'function.php'

        if(emtyInputSignup($username, $email, $password, $firstname, $lastname) !== false){
            exit(header("Location: ../index.php?error=emptyinput"));
        }
        if(invalidUid($username) !== false){
            exit(header("Location: ../index.php?error=invaliduid"));
        }
        if(invalidEmail($email) !== false){
            exit(header("Location: ../index.php?error=invalidemail"));
        }
        if(pwdMatch($password, $confirmPass) !== false){
            exit(header("Location: ../index.php?error=passworddontmatch"));
        }
        if(uidExists($pdo, $username) !== false){
            exit(header("Location: ../index.php?error=usernametaken"));
        }

        $sql = "INSERT INTO student (username, email, password, first_name, last_name)
                VALUES ('$username', '$email', '$password', '$firstname', '$lastname');";
        $pdo ->query($sql);

            exit(header("Location: ../index.php?signup=success"));
    
    }