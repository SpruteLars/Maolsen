<?php

include '../../../dbConnection.php';
$conn = getDbConnection();

$sql = "SELECT * FROM `q_author` WHERE authorId=" . $_GET['authorId'];

$stmt = $conn -> prepare ($sql);

$stmt -> execute();

$record = $stmt -> fetch();

if ($record['gender'] == "M") {
    $gender = "Male";
    // code...
}else{
    $gender = "Female";
}

echo "<h1> Author Info </h1><br>" .  "Full name: " .$record['firstName'] . " " . $record['lastName'] . "<br>Gender: ". $gender . " <br>Date of birthday: " . $record['dob'] . "<br>Date of death: " .  $record['dod'] ."<br>Profession: " . $record['profession'] ."<br>Country: ". $record['country'] . "<br>biography: <br>" . $record['biography'] . " " . "<br><img src='". $record['picture']. "' width='200'>";

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body style='background-color:black;'>





    </body>
</html>