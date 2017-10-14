<?php

include '../../../../dbConnection.php';

$conn = getDbConnection();

$sql = "SELECT * FROM q_quote NATURAL JOIN q_author";

$stmt = $conn -> prepare ($sql);

$stmt -> execute();

$records = $stmt -> fetchAll();




    $randomNumber = array_rand($records);
    echo ($records[$randomNumber][quote] . " " . $records[$randomNumber][quoteId] . "<br> <a href='authorInfo.php?authorId=".$records[$randomNumber][authorId]."'>" . $records[$randomNumber][firstName] . " " . $records[$randomNumber][lastName] ."</a> <br>" . "<iframe src='authorInfo.php?authorId='".$records[$randomNumber][authorId]."'></iframe>" );

?>


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
        
    </body>
</html>