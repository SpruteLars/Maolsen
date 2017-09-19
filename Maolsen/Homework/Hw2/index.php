<!DOCTYPE html>
<html>
    <head>
        <?php
       echo "<link rel='stylesheet' href='style.css' type='text/css' />"
        ?>
    </head>
     <?php
    
       
        
        $month = array('January','February','March','April','May','June','July','August','September','Oktober','November','December');
        $season = array('winter','spring','summer','fall');
        $days = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
        $randomNumber1 = rand(0,1);
        if ($randomNumber1 < 2 || $randomNumber1 == 11) {
            echo "<body class='$season[0]'>";
        }elseif ($randomNumber1 >= 3 && $randomNumber1 < 6){
            echo "<body class='$season[1]'>";
        }elseif ($randomNumber1 >= 6 && $randomNumber1 < 9){
            echo "<body class='$season[2]'>";
        }elseif ($randomNumber1 >= 9 && $randomNumber1 < 11){
            echo "<body class='$season[3]'>";
        }
       
        $value = 1;
        $counter = 0;
        for ($i = 0; $i < count($days); $i++) {
              echo "<table><tr><td>$days[$i]</td></tc></table>";
              if($i == 6){
                  echo "<br><br>";
              }
        }
       
        if ($randomNumber1== 0) {
           
             for ($value; $value <= 31; $value++) {
                 echo "<table><tr><td>$value</td></tr></table>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]<h1>";
        }
        if ($randomNumber1== 1) {
            echo "<h1>$month[$randomNumber1]<h1>";
               for ($value; $value < 29  ; $value++) {
                     echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
        
        
         if ($randomNumber1== 2) {
            echo "<h1>$month[$randomNumber1]<h1>";
            echo '<h1>March<h1>';
                 for ($value; $value <= 31; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 3) {
            echo "<h1>$month[$randomNumber1]<h1>";
           
           for ($value; $value <= 31; $value++) {
                echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 4) {
             echo "<h1>$month[$randomNumber1]<h1>";
            
                 for ($value; $value <= 30; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 5) {
             echo "<h1>$month[$randomNumber1]<h1>";
           
            for ($value; $value <= 31; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 6) {
            echo "<h1>$month[$randomNumber1]<h1>";
          
            for ($value; $value <= 30; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 7) {
            echo "<h1>$month[$randomNumber1]<h1>";
           
            for ($value; $value <= 31; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 8) {
            echo "<h1>$month[$randomNumber1]<h1>";
            
            for ($value; $value <= 30; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
         if ($randomNumber1== 9) {
             echo "<h1>$month[$randomNumber1]<h1>";
           
            for ($value; $value <= 31; $value++) {
                 echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1==  10) {
             echo "<h1>$month[$randomNumber1]<h1>";
            echo '<h1>November<h1>';
            for ($value; $value <= 30; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
         if ($randomNumber1== 11) {
             echo "<h1>$month[$randomNumber1]<h1>";
            for ($value; $value <= 31; $value++) {
                  echo "<tr><tc>$value</tc></tr>";
                     
                      if ($value%7==0){
                          echo "<br></p>";
                          
                      }
                      
                      
                 
            }
        }
        
       
    echo "</body>";
     ?>
</html>