<!DOCTYPE html>
<html>
    <head>
        <?php
       echo "<link rel='stylesheet' href='style.css' type='text/css' />"
        ?>
    </head>
     <?php
    
       
        
        $month = array('January','February','March','April','May','June','July','August','September','Oktober','November','December');
        $season = ('fall summer spring winter');
        $fixed = explode(" ", $season);
        $reversed = array_reverse($fixed);
        $days = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
        $randomNumber1 = rand(0,11);
        if ($randomNumber1 < 2 || $randomNumber1 == 11) {
            echo "<body class='$reversed[0]'>";
        }elseif ($randomNumber1 >= 2 && $randomNumber1 < 5){
            echo "<body class='$reversed[1]'>";
        }elseif ($randomNumber1 >= 5 && $randomNumber1 < 8){
            echo "<body class='$reversed[2]'>";
        }elseif ($randomNumber1 >= 8 && $randomNumber1 < 11){
            echo "<body class='$reversed[3]'>";
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
                 
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        if ($randomNumber1== 1) {
            
               for ($value; $value < 29  ; $value++) {
                    
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br></p>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
        
         if ($randomNumber1== 2) {
            
                 for ($value; $value <= 31; $value++) {
                    
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
        
         if ($randomNumber1== 3) {
            
           
           for ($value; $value <= 31; $value++) {
                
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 4) {
             
            
                 for ($value; $value <= 30; $value++) {
                 
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 5) {
             
           
            for ($value; $value <= 31; $value++) {
                
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 6) {
            
          
            for ($value; $value <= 30; $value++) {
                 
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 7) {
            
           
            for ($value; $value <= 31; $value++) {
                
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 8) {
            
            
            for ($value; $value <= 30; $value++) {
                 
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 9) {
           
            for ($value; $value <= 31; $value++) {
                
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1==  10) {
            
            
            for ($value; $value <= 30; $value++) {
                 
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
        
         if ($randomNumber1== 11) {
            for ($value; $value <= 31; $value++) {
                  
                     
                      if ($value%7==0){
                          echo "<table><tr><td class='sun'>$value</td></tr></table>";
                          echo "<br>";
                      }else{
                          echo "<table><tr><td>$value</td></tr></table>";
                      }
                      
                      
                 
            }
             echo "<h1>$month[$randomNumber1]</h1>";
        }
      
          echo "<p><form id='input'><input type='submit' value='Random month'/></form></p>";
        
       echo "<div>This is a Calendar that shows the date for each month when monday is the first day of the month</div>";
    echo "</body>";
     ?>
</html>