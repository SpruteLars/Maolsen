<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <main id="main">
        <?php
        
        $symbol = "seven";
        $symbol2 = "orange";
        $symbol3 = "cherry";
        $symbol4 = "grapes";
        $symbol5 = "bar";
        
        $list = array($symbol,$symbol2,$symbol3,$symbol4,$symbol5);
        
        $randomNumber = rand(0,4);
        $randomNumber1 = rand(0,4);
        $randomNumber2 = rand(0,4);
        
        echo "<img id='reel1' src='img/$list[$randomNumber].png' alt='$list[$randomNumber]' width='50px'/>";
        echo "<img id='reel2' src='img/$list[$randomNumber2].png' alt='$list[$randomNumber2]' width='50px'/>";
        echo "<img id='reel3' src='img/$list[$randomNumber1].png' alt='$list[$randomNumber1]' width='50px'/>";
        
        
        
        
        
       
        if ($list[$randomNumber] == $list[$randomNumber1] && $list[$randomNumber1] == $list[$randomNumber2]) {
            echo $list[$randomNumber];
            if ($randomNumber== 0) {
            echo "<p id='output'>You won 1000 points</p>";
            }else if($randomNumber == 1){
                echo "<p id='output'>You won 500 points</p>";
            }else if ($randomNumber == 2) {
                echo "<p id='output'>You won 200 points</p>";
            }else if ($randomNumber == 3){
                echo "<p id='output'>You won 100 points</p>";
            }else{
                echo "<p id='output'>You won 1 points</p>";
            }
            
        }
        
        ?>
        </main>
    <form id="input">
        <input type="text" name=""/>
        <input type="submit" value="spin"/>
    </form>
    </body>
</html>