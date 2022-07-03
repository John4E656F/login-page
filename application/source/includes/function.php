<?php

function emptyInputSignup($username, $email, $password, $confirmPass, $firstname, $lastname) {
    $result;
    if (empty($username) || empty($email) || empty($password) || empty($firstname) || empty($lastname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $confirmPass) {
    $result;
    if ($password !== $confirmPass) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($username, $email, $pdo) {
    $sql = "SELECT * FROM student WHERE username = ? OR email = ?;";
    $stmt = $pdo ->prepare($sql);
    if (!$stmt){
        exit(header("Location: ../index.php?error=stmtfailed"));
    }

    $stmt->bindParam(1, 'username', $username, PDO::PARAM_STR);
    $stmt->bindParam(2, 'email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $resultData =$stmt->fetch();

    if ($resultData) {
        return $resultData;
    } else {
        $result = false;
        return $result;
    }


}   

function createUser($pdo, $username, $email, $password, $firstname, $lastname) {
    $sql = "INSERT INTO student(username, email, password, firstname, lastname) VALUES (?, ?, ?, ?, ?);";
    $stmt = $pdo ->prepare($sql);
    if (!$stmt){
        exit(header("Location: ../index.php?error=stmtfailed"));
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $stmt->bindParam(1, 'username', $username, PDO::PARAM_STR);
    $stmt->bindParam(2, 'email', $email, PDO::PARAM_STR);
    $stmt->bindParam(3, 'password', $hashedPwd, PDO::PARAM_STR);
    $stmt->bindParam(4, 'firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindParam(5, 'lastname', $lastname, PDO::PARAM_STR);

    $stmt->execute();
    exit(header("Location: ../index.php?error=none"));
}   