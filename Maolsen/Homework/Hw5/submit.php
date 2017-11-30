<?php
session_start();
include '../../../dbConnection2.php';

$conn = getDbConnection();


    

$sql = 'INSERT INTO q_quiz (userID, score) VALUES (:userID, :score);';
$np  = array();
$np[':userId'] = $_SESSION['userId'];
$np[':score'] = $_GET['score'];


    $stmt = $conn -> prepare ($sql);
    $stmt -> execute($np);
    
    
?>