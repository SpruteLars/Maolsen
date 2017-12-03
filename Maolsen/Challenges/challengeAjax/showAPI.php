<?php
include '../../../dbConnection2.php';

$conn = getDbConnection();


$sql = "SELECT COUNT(keyword) as Total, submited FROM q_pixa where keyword = :keyword group by keyword";

$namedParameters = array();
$namedParameters[":keyword"] = $_GET["image"];

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($record);
?>