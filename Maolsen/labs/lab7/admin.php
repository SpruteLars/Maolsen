<?php
    session_start();
    include '../../../dbConnection2.php';
    
    if(!isset($_SESSION['adminFullName'])){
        header('location:index.php');
    }
    
    function authorlist(){
        
        $conn = getDbConnection();


        $sql = "SELECT * FROM q_author order by lastName";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll(PDO::FETCH_ASSOC);

        for($i = 0;$i<count($record);$i++){
            echo "<br>" . $record[$i]['firstName'] . " " . $record[$i]['lastName'] . " " . $record[$i]['country'];
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Admin section</h1>
        <h2>Welcome <?=$_SESSION['adminFullName']?> </h2>
        <?=authorList()?>
        
        
    </body>
</html>