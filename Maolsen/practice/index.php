<?php
$host = 'localhost';
$dbname = 'qoutes';
$username = 'root';
$password = '';
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$randomNumber = rand(0,30);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


function displayMaleQuotes(){
    global $dbConn;
    $sql = "SELECT quote, firstName, lastName FROM q_quote NATURAL JOIN q_author WHERE gender='m'";

$stmt = $dbConn -> prepare ($sql);

$stmt -> execute (  array ( ':id' => '1')  );

while ($row = $stmt -> fetch())  {
    echo  $row['quote'] . " " .  $row['firstName'] ." ". $row['lastName'] . " <br>";
}
}
function displayLongestQuotes(){
    global $dbConn;
    $sql = "SELECT quote, firstName, lastName FROM `q_quote` NATURAL JOIN q_author ORDER BY length(quote) DESC LIMIT 3";

$stmt = $dbConn -> prepare ($sql);

$stmt -> execute (  array ( ':id' => '1')  );

while ($row = $stmt -> fetch())  {
    echo  $row['quote'] . " " .  $row['firstName'] ." ". $row['lastName'] . " <br>";
}
}



?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h2>Male authors</h2>
        <?php 
        displayMaleQuotes();
        ?>
        <hr>
        <?php
        displayLongestQuotes();
        ?>
        
    </body>
</html>