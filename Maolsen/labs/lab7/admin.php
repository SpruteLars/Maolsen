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
            echo "<br>[<a href='updateAuthor.php?authorId=".$record[$i]['authorId']."'>Update</a>] ";
            echo "" . $record[$i]['firstName'] . " " . $record[$i]['lastName'] . " " . $record[$i]['country']. "<form style='display:inline' action='delete.php' onsubmit='return confirmDelete()'>
                    <input type='hidden' name='authorId' value='".$record[$i]['authorId']."'>
                    <input type='submit' value='Delete'>
                  </form>";
        }
        
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          <script>

            function confirmDelete() {
                
                return confirm("Are you sure you want to delete this author?");
                
                
            }            
            
        </script>
    </head>
    <body>
        <h1>Admin section</h1>
        <h2>Welcome <?=$_SESSION['adminFullName']?> </h2>
        
        <div class="container">
            <div class="jumbotron">
                <form action="addAuthor.php">
                    <input type="submit" value="Add New Author" />
                </form>

                <form action="logout.php">
                    <input type="submit" value="Logout" />
                </form>
                <?=authorList()?>
            </div>
        </div>
    </body>
</html>