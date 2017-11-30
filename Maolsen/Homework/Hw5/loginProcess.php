<?php

session_start();



include '../../../dbConnection2.php';

$conn = getDbConnection();

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM q_login WHERE username = :username and password = :password";

$namedParameters = array();
$namedParameters[':username'] = $username;
$namedParameters[':password'] = $password;

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);


if(empty($record)){
    echo "Wrong credentials";
}else{
    echo "Success";
  $_SESSION['userId'] = $record['userId'];
 header('location:quiz.php');
}

?>
