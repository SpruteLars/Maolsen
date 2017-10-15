<?php

include '../../../dbConnection.php';
$conn = getDbConnection();

$sql = "SELECT * FROM `q_author` WHERE authorId=" . $_GET['authorId'];

$stmt = $conn -> prepare ($sql);

$stmt -> execute();

$record = $stmt -> fetch();

echo "<h1> Author Info </h1><br>" .  "Full name: " .$record['firstName'] . " " . $record['lastName'] . " <br>Date of birthday: " . $record['dob'] . "<br>Date of death: " .  $record['dod'] . "<br>" . $record['biography'] . " " . "<br><img src='". $record['picture']. "' width='200'>";

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>





    </body>
</html>