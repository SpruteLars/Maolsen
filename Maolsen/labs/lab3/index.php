<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <? php 
        $randomcard = rand(1,13);
        $randomsuit = rand(0,3);
        $suits = array("clubs","diamonds","hearts","spades");
        
     
            echo "<img src='cards/$suits[$randomsuit]/$randomcard.png' alt='card'/>"
            echo "<img src='cards/$suits[$randomsuit]/$randomcard.png' alt='card'/>"
            echo "<img src='cards/$suits[$randomsuit]/$randomcard.png' alt='card'/>"
            echo "<img src='cards/$suits[$randomsuit]/$randomcard.png' alt='card'/>"
            echo "<img src='cards/$suits[$randomsuit]/$randomcard.png' alt='card'/>"
        
        
        
        ?>
    </body>
</html>