<?php


include '../../../../dbConnection.php';
$dbConn = getDbConnection();


function getRandomQuote_NotEfficient() {
    
    global $dbConn;
    
    $sql = "SELECT quote FROM q_quote ";
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  
    
    shuffle($records);
    
    echo $records[0]['quote'];

}


function getRandomQuote() {
    
    global $dbConn;
    
    

    $sql = "SELECT quoteId FROM q_quote"; 
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  
    
   
    $randomIndex = array_rand($records);
    
    
    $quoteId = $records[$randomIndex]['quoteId'];
    
    
    $sql = "SELECT quote, firstName, lastName, authorId FROM q_quote NATURAL JOIN q_author WHERE quoteId = $quoteId";
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $record = $stmt -> fetch();        
    
    echo    $record['quote']  . "<br>";
    echo    "<a target='authorInfo' href='authorInfo.php?authorId=".$record['authorId']."'>-" . $record['firstName'] . " " . $record['lastName'] . "</a>";
    
    

}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 5: Random Famous Quote Generator </title>
    </head>
    <body>


    <?=getRandomQuote()?>        

<br />
    <iframe name="authorInfo" width="500" height="300"></iframe>

    </body>
</html>