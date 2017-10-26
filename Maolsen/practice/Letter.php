<?php
    function displayAlpha(){
        $alphabet = range('A' , 'Z');
        //print_r($alphabet);
        foreach($alphabet as $letter){
            echo "<option value='" . $letter . "'>" . $letter . "</option><br>";
        }
    }



?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
   <body>
       <form>
         <select name="lettertofind" >
             <?=displayAlpha()?>
             
         </select>
           <input type="text" name=""/>
           <select name="lettertoOmit" >
             <?=displayAlpha()?>
             
         </select>
           <input type="submit" value="Submit"/>
       </form>
   </body>
   
</html>