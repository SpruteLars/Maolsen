<?php
include '../../../dbConnection2.php';

$conn = getDbConnection();
$sql = 'INSERT INTO q_pixa (keyword) VALUES (":keyword");';

$nameParameters  = array();
$nameParameters[':keyword'] = $_GET['image'];



$stmt = $conn -> prepare ($sql);
$stmt -> execute($nameParameters);


?>