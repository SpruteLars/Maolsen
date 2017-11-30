<?php
session_start();
include '../../../dbConnection2.php';

$conn = getDbConnection();


    

$sql = 'INSERT INTO q_quiz (userId, score) VALUES (:userId, :score);';
$nameParameters  = array();
$nameParameters[':userId'] = $_SESSION['userId'];
$nameParameters[':score'] = $_GET['score'];


    $stmt = $conn -> prepare ($sql);
    $stmt -> execute($nameParameters);
    
    
?>