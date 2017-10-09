<?php

$host = 'localhost';
$dbname = 'qoutes';
$username = 'root';
$password = '';
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT firstName, lastName FROM q_author WHERE gender = 'M'";

$stmt = $dbConn -> prepare ($sql);

$stmt -> execute (  array ( ':id' => '1')  );

while ($row = $stmt -> fetch())  {
    echo  $row['firstName'] . ", " . $row['lastName'];
}

?>


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    </body>
</html>