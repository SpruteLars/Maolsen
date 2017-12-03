<?php

include('pixabayAPI.php');


?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <script>
           
           function submitImg() {
             
             $.ajax({
                type: "GET",
                url: "submitAPI.php",
                dataType: "json",
                data: { "image": $("#keyword").val() },
                
                
                
            }); 
             
             showStat();
             
               
           }
           
           function showStat() {
               
               $.ajax({
                type: "GET",
                url: "showAPI.php",
                dataType: "json",
                data: { "image": $("#keyword").val() },
                success:function(data,status){
                      document.getElementById('stat').innerHTML = "Submitted: " + data.Total["0"] + "Timestamp: " + data.submited; 
                  },
                
            });
               
           }
           
           function searchPicture(){
               
              $.ajax({
                  
                  type: "GET",
                  url: "https://pixabay.com/api/?key=5589438-47a0bca778bf23fc2e8c5bf3e",
                  dataType: "json",
                  data: { "q":$("#keyword").val()},
                  success:function(data,status){
                      document.getElementById("stat").src = data.hits["0"].webformatURL;
                  },
              });
              submitImg();
           }
            
            
        </script>
    </head>
    <body>
        
        <h1>Pixabay Image Search</h1>
        
            
            <input type="text" name="image"  id="keyword"/>
            <button onclick="searchPicture()" >press</button>
           <img id="result" width="200px" height="200"/>
           <p id="stat"></p>
    </body>
</html>