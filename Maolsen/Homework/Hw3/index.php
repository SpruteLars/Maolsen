<?php
    include 'api/pixabayAPI.php';
    echo "<h1> Calculator using form elements and php</h1>";
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
    
     $imageURLs = getImageURLs('math');
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
          <div class="jumbotron">
                <form>
                    <input type="number" name="x" placeholder="x = input. Default is 0"/>
                    <input type="radio" name="PlussMinus" value="-"/>Minus
                    <input type="radio" name="PlussMinus" value="+"/>Pluss
                    <input type="number" name="y" placeholder="y = input. Default is 0"/><br>
                    <br>
                    <select name="DivideMultiply">
                        <option value="" >Divide or Multiply</option>
                        <option value="/">Divide</option>
                        <option value="*">Multiply</option>
                    
                    </select>
                    <input type="text" name="divisionMultiply" placeholder=" variable or number"/> <br>
                    <input type="submit" value="Calculate"/>
                </form>
        <?php
        
        if(isset($_GET['x']) && isset($_GET['y'])){
        if ($x=="" || $y=="" ) {
            if($x==""){
              echo "<span><h2>Error: insert a value for x</h2></span>";
            }
            if($y==""){
              echo "<h2>Error: insert a value for y</h2>";
            }
        }
        }else{
            if (!isset($_GET['PlussMinus'])) {
                echo "<h2> Error: choose a value if you just want one number do x or y, + or - 0</h2>";
            } else {
                   
         
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
                
            }
         
                
        }
            
           
        ?>
        </div>
        </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
    </body>
</html>