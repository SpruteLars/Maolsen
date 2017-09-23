 <?php 
        
        $deck = array();
        for ($i = 1; $i < 53; $i++) {
             $deck[]=$i;
        }
        shuffle($deck);
        
        
        function displayHand(){
        global $deck,$totalPoint;
        $handAces = 0;
        for ($i=0;$i < 5;$i++){
          $lastCard = array_pop($deck);
          $cardValue = $lastCard % 13;
          $cardSuit;
          
          $handPoints;
          
          if ($lastCard <= 13) {
            $cardSuit = "clubs";
          } else if ($lastCard > 13 && $lastCard <= 26) {
              $cardSuit = "diamonds";
          } else if ($lastCard > 26 && $lastCard <= 39) {
              $cardSuit = "hearts";
          } else if ($lastCard > 39) {
            $cardSuit = "spades";
          }
          if ($cardValue == 0) {
              $cardValue = 13;
          }
          //echo $cardValue;
          $handPoints += $cardValue;
          if ($cardValue == 1) {
              echo "<img src='cards/$cardSuit/$cardValue.png' alt='$cardValue' style='border:solid 2px; border-color:yellow;'/>";
              $handAces += 1;
          }else{
         echo "<img src='cards/$cardSuit/$cardValue.png' alt='$cardValue'/>";
        }
        
        }
        echo "points:  " . $handPoints . " ";
        $totalPoint += $handPoints; 
        echo "Aces: " . $handAces . " ";
        return $handAces;
        }
        ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
       <h1>Ace poker</h1>
       <h2> Player with more aces wins</h2>
       <?php
       $p1 = displayHand();
       ?>
       <hr>
       <?php
       $p2 = displayHand();
       ?>
       
       <?php
       if($p1 > $p2){
           echo "<h2>Player 1 Wins: $totalPoint points!</h2>";
       }else if($p1 < $p2){
           echo "<h2>Player 2 Wins: $totalPoint points!</h2>";
       }else{
           echo "<h2>tie</h2>";
       }
       ?>
    </body>
</html>