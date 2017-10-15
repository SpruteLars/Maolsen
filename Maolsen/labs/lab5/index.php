<?php


include '../../../dbConnection.php';
$dbConn = getDbConnection();




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
    
    echo    $record['quote']   .'"' ."<br>"  . "<a target='authorInfo' href='authorInfo.php?authorId=".$record['authorId']."'>-" . $record['firstName'] . " " . $record['lastName'] . "</a>";
    
    

}


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
    <h1> Random Quote </h1>
    <p> "
    <?=getRandomQuote()?> 
    
    </p>
<br />
    <iframe name="authorInfo" ></iframe>

    </body>
</html>