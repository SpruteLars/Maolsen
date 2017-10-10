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
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <form>
            <input type="number" name="x" placeholder="x = input. Default is 0"/>
            <input type="number" name="y" placeholder="y = input. Default is 0"/>
            <input type="radio" name="PlussMinus" value="-"/>Minus
            <input type="radio" name="PlussMinus" value="+"/>Pluss
            <select name="DivideMultiply">
                <option value="" >Divide or Multiply</option>
                <option value="/">Divide</option>
                <option value="*">Multiply</option>
                
            </select>
            <input type="text" name="divisionMultiply" placeholder="Number to divide or multiply with"/>
            <input type="submit" value="Submit"/>
        </form>
        <?php
         if($x==""){
                $x = 0;
            }
            if($y==""){
                $y = 0;
            }
            
            echo "(";
            echo $x . " ";
            echo $plussminus . " ";
            echo $y . "";
            echo ")";
            echo $divideMultiply . " ";
            echo $divisionOrMultiplication . " ";
            echo "= ";
           
            if ($plussminus == "+") {
                
                $sum = $x + $y;
            }
            if($plussminus == "-"){
                
                $sum = $x - $y;
            }
            if($divideMultiply == ""){
                echo  "<span>". $sum."</span>";
            }
            if($divideMultiply == "*"){
                if (!is_numeric($divisionOrMultiplication)) {
                  echo   $sum;
                  echo   $divisionOrMultiplication;
                } else {
                   $sum = $sum * $divisionOrMultiplication;
                 echo  "<span>". $sum."</span>";
                 
                }
                
                 
            }
            
            if($divideMultiply == "/"){
                if(!is_numeric($divisionOrMultiplication)){
                        echo $sum;
                        echo $divideMultiply . " ";
                        echo $divisionOrMultiplication . " ";
                    }else{
                        if ($divisionOrMultiplication == 0) {
                            echo "<h2> Error: Can not divide by 0</h2>";
                        }else{
                
                            $sum = $sum / $divisionOrMultiplication;
                            echo  "<span>". $sum."</span>";
                        }
                    }
               
                    
                }
                
            
            
           
        ?>
    </body>
</html>