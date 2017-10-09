<?php
    if(isset($_GET['PlussMinus'])){
    $plussminus = $_GET['PlussMinus'];
    }
    if(isset($_GET['x'])){
    $x = $_GET['x'];
    }
    if(isset($_GET['y'])){
    $y = $_GET['y'];
    }
    if(isset($_GET['DivideMultiply'])){
    $divideMultiply = $_GET['DivideMultiply'];
    }
    if(!isset($_GET['DivideMultiply'])){
   
    $divideMultiply = "";
    }else{
         if(isset($_GET['DivideMultiply'])){
             $divideMultiply = $_GET['DivideMultiply'];
    }
    
    }
    if (isset($_GET['divisionMultiply'])) {
        $divisionOrMultiplication = $_GET['divisionMultiply']; 
    }
    
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form>
            <input type="text" name="x"/>
            <input type="text" name="y"/>
            <input type="radio" name="PlussMinus" value="-"/>Minus
            <input type="radio" name="PlussMinus" value="+"/>Pluss
            <select name="DivideMultiply">
                <option value=""></option>
                <option value="/">Divide</option>
                <option value="*">Multiply</option>
                
            </select>
            <input type="text" name="divisionMultiply"/>
            <input type="submit" value="Submit"/>
        </form>
        <?php
            echo "(";
            echo $x . " ";
            echo $plussminus . " ";
            echo $y . "";
            echo ")";
            echo $divideMultiply . " ";
            echo $divisionOrMultiplication . " ";
            echo "= ";
            //if()
            if ($plussminus == "+") {
                
                $sum = $x + $y;
            }
            if($plussminus == "-"){
                
                $sum = $x - $y;
            }
            if($divideMultiply == "*"){
            
                 $sum = $sum * $divisionOrMultiplication;
            }
            if($divideMultiply == "/"){
                
                 $sum = $sum / $divisionOrMultiplication;
            }
            echo  $sum;
           
        ?>
    </body>
</html>