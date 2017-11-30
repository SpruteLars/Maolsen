<?php

session_start();



include '../../../dbConnection2.php';

$conn = getDbConnection();


$sql = "SELECT userId, COUNT(userId) as Total, AVG(score) as Average FROM q_quiz where userId = :userId group by userId";

$namedParameters = array();
$namedParameters[":userId"] = $_SESSION["userId"];

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($record);
?>
