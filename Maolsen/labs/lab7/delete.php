<?php
session_start();
if(!isset($_SESSION['adminFullName'])){
        header('location:index.php');
    }
include '../../../dbConnection2.php';
$conn = getDbConnection();

$sql = "DELETE FROM q_author WHERE authorId = " . $_GET['authorId'];

//echo $sql;

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: admin.php');


?>