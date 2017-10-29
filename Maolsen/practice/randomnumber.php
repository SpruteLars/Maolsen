<?php
    session_start();
    $_SESSION['points'] = 0;
    if (!isset($_SESSION['randomnumber'])) {
        $_SESSION['randomnumber'] = rand(1,100);
    }
   
    if ($_SESSION['randomnumber'] == $_GET['guess']) {
        $_SESSION['points']++;
        $_SESSION['randomnumber'] = rand(1,100);
    }
    echo $_SESSION['randomnumber'];

?>







<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form>
            <input type="number" name="guess"/>
            <input type="submit" value="Submit"/>
        </form>
        
        <?php 
        echo $_SESSION['points'];
        ?>
    </body>
</html>