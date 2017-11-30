<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script>
        //
        //Picture links: https://pixabay.com/no/ok-sjekk-todo-agenda-ikonet-1976099/  https://pixabay.com/no/krysse-slette-fjerne-avbryt-296507/
      
        var log = 0
        var log2 = 0
        var log3 = 0
        var log4 = 0
        var log5 = 0
        var log6 = 0
        var points = 0;
        var question = 0;
            function quiz1(){
                if(log !=1){
                var q1 = document.getElementById("answer1").value;
                 document.getElementById("error").innerHTML = "";
                
                if(document.getElementById("answer1").value == "yes"){
                    points++;
                    document.getElementById("result1").innerHTML = "<span style='color:green;'>correct<span><img src='ok.png' width='100px' height='100px'></img>";
                }else{
                     document.getElementById("result1").innerHTML = "<span style='color:red;'>Wrong<span><img src='cross.png' width='100px' height='100px'></img>";
                }
                
                
                question++;
                console.log(question);
                 document.getElementById("turns").innerHTML = "you have " + points + "out of 6"
                   if(question == 6){
                var prosent = (points/6)*100;
                if(prosent > 80){
                    document.getElementById("finalResult").innerHTML = "Congratulations You made it! " + prosent + "% out of 100%" ;
                }else{
                    document.getElementById("finalResult").innerHTML = "Too bad, Try again" + prosent + "% out of 100%";
                }
                
            }
            log++;
            }else{
                     document.getElementById("error").innerHTML = "You already answered that one";
                 }
            }
            
             function quiz2(){
                 if(log2 !=1){
                    $q2 = $("#answer2").val();
                    console.log($q2);
                    document.getElementById("error").innerHTML = "";
                    if($q2 == 2){
                        points++;
                        document.getElementById("result2").innerHTML = "<span style='color:green;'>correct<span><img src='ok.png' width='100px' height='100px'></img>";
                    }else{
                        document.getElementById("result2").innerHTML = "<span style='color:red;'>Wrong<span><img src='cross.png' width='100px' height='100px'></img>";
                    }
                    question++;
                   document.getElementById("turns").innerHTML = "you have " + points + "out of 6"
                   if(question == 6){
                    var prosent = (points/6)*100;
                     if(prosent > 80){
                        document.getElementById("finalResult").innerHTML = "Congratulations You made it! " + prosent + "% out of 100%" ;
                    }else{
                         document.getElementById("finalResult").innerHTML = "Too bad, Try again" + prosent + "% out of 100%";
                }   
                
          
               question++;
            console.log(question);
            }
            log2++;
             }else{
                     document.getElementById("error").innerHTML = "You already answered that one";
                 }
             }
            function quiz3(){
                if(log3 != 1){
                $q1 = $('input[name=ans3]:checked').val();
                  document.getElementById("error").innerHTML = "";
                if($q1 == 2){
                         points++;
                    $("#result3").html("<span style='color:green;'>correct<span><img src='ok.png' width='100px' height='100px'></img>");
                }else{
                     $("#result3").html("<span style='color:red;'>Wrong<span><img src='cross.png' width='100px' height='100px'></img>");
                }
                question++;
                console.log(question);
                document.getElementById("turns").innerHTML = "you have " + points + "out of 6"
                   if(question == 6){
                var prosent = (points/6)*100;
                if(prosent > 80){
                    document.getElementById("finalResult").innerHTML = "Congratulations You made it! " + prosent + "% out of 100%" ;
                }else{
                    document.getElementById("finalResult").innerHTML = "Too bad, Try again" + prosent + "% out of 100%";
                }
            }
            log3++;
                }else{
                     document.getElementById("error").innerHTML = "You already answered that one";
                 }
            }
            
            function quiz4(){
                if(log4 !=1){
                var sum = 0;
                 document.getElementById("error").innerHTML = "";
                sum = document.getElementById("num1").value
               
                console.log(sum);
            
            
                
                if(sum == 88){
                     points++;
                    $("#result4").html("<span style='color:green;'>correct<span><img src='ok.png' width='100px' height='100px'></img>");
                }else{
                     $("#result4").html("<span style='color:red;'>Wrong<span><img src='cross.png' width='100px' height='100px'></img>");
                }
                
                
                question++;
                console.log(question);
                 document.getElementById("turns").innerHTML = "you have " + points + "out of 6"
                   if(question == 6){
                 var prosent = (points/6)*100;
                if(prosent > 80){
                    document.getElementById("finalResult").innerHTML = "Congratulations You made it! " + prosent + "% out of 100%" ;
                }else{
                    document.getElementById("finalResult").innerHTML = "Too bad, Try again" + prosent + "% out of 100%";
                }
                
            }
            log4++;
            }else{
                     document.getElementById("error").innerHTML = "You already answered that one";
                 }
            
            }
            
             function quiz5(){
                 if(log5 != 1){
                  document.getElementById("error").innerHTML = "";
                 var sum = 0;
                 if(document.getElementById("c1").checked == true){
                     sum += 1
                 }
                  if(document.getElementById("c2").checked == true){
                     sum += 2
                 }
                  if(document.getElementById("c3").checked == true){
                     sum += 3
                 }
                  if(document.getElementById("c4").checked == true){
                     sum += 4
                 }
                var q1 = sum;
                console.log(q1);
                
                
                if(q1 == 7){
                    points++;
                    document.getElementById("result5").innerHTML = "<span style='color:green;'>correct<span><img src='ok.png' width='100px' height='100px'></img>" ;
                }else{
                     document.getElementById("result5").innerHTML = "<span style='color:red;'>Wrong<span><img src='cross.png' width='100px' height='100px'></img>";
                }
                
                question++;
                console.log(question);
                 document.getElementById("turns").innerHTML = "you have " + points + "out of 6"
                   if(question == 6){
                 var prosent = (points/6)*100;
                if(prosent > 80){
                    document.getElementById("finalResult").innerHTML = "Congratulations You made it! " + prosent + "% out of 100%" ;
                }else{
                    document.getElementById("finalResult").innerHTML = "Too bad, Try again" + prosent + "% out of 100%";
                }
                
            }
            log5++;
                 }else{
                     document.getElementById("error").innerHTML = "You already answered that one";
                 }
                 
             }
              function quiz6(value){
                 if(log6 != 1){
                     document.getElementById("error").innerHTML = "";
                $q1 = value
                console.log($q1);
                
                
                if($q1 == 352){
                    points++;
                    $("#result6").html("<span style='color:green;'>correct<span>");
                }else{
                     $("#result6").html("<span style='color:red;'>Wrong<span><img src='Dark_Red_x.svg' width='200px'></img>");
                }
                
                
               
                question++;
                 console.log(question);
                 document.getElementById("turns").innerHTML = "you have " + points + "out of 6"
                   if(question == 6){
                var prosent = (points/6)*100;
               if(prosent > 80){
                    document.getElementById("finalResult").innerHTML = "Congratulations You made it! " + prosent + "% out of 100%" ;
                }else{
                    document.getElementById("finalResult").innerHTML = "Too bad, Try again" + prosent + " % out of 100%";
                }
                
                }
                log6++;
                
                 }else{
                     document.getElementById("error").innerHTML = "You already answered that one";
                 }
             }
             
             function sub(){
                
                 var prosent = (points/6)*100;
                 console.log(prosent);
                $.ajax({
                type: "GET",
                url: "submit.php",
                dataType: "json",
                data: { "score":prosent},
                 });
                
                showScore();
             }
             
             function showScore(){
                 $.ajax({
                type: "GET",
                url: "scoreAPI.php",
                dataType: "json",
                success: function(data, status) {
                    document.getElementById("dbresult").innerHTML = "You have " + data.Total + " tries and a average of " + data.Average + "%";
                },
            }); 
                 
             }
          
            
        </script>
    </head>
    <body>
        
       <h1>Class quiz</h1>
       <div id="box">
        <h2 id="error" style="color:red"></h2>
        <p>Is this the best question? </p>
        <input type="text" name="" id="answer1"/>
        <button type="button" onclick="quiz1()" id="trykk">Submit</button>
        <p>Answer = yes </p>
        <br>
        <p id="result1"></p>
        <p>2.  how many keys does the most modern pianos have?</p>
        <input type="number" name="" id="num1"/> 
        <button type="button" onclick="quiz4()" id="trykk">Submit</button>
        <p id="result4"></p>
        <p>Answer = 88 </p>
        
        
        
         <p>3.  What in this selection equals 7</p>
            <input type="checkbox" name="q5" id="c1" value="1"/>1
            <input type="checkbox" name="q5" id="c2" value="2"/>2
            <input type="checkbox" name="q5" id="c3" value="3"/>3
            <input type="checkbox" name="q5" id="c4" value="4"/>4
            <button type="button" onclick="quiz5()" id="tryk">Submit</button>
            <p id="result5"> </p>
            <p>answer 3 and 4 </p>
            

        <p>4. how many radio buttons are there?</p>
        
        <input type="radio" name="ans3" value="1" id="answer3"/>1
        <input type="radio" name="ans3" value="2" id="answer3"/>2
        <button type="button" onclick="quiz3()" id="try">Submit</button>
        <p id="result3"></p>
         <p>answer= 2 </p>
        <br>
        <p>5. Which number is the median here? 1,2,3 </p>
        <select id="answer2"/>
        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
        <button type="button" onclick="quiz2()" id="tryk">Submit</button>
        <p id="result2"></p>
        
        <p>Answer = 2 </p>
        <br>
        <p>6. which course is this homework for?</p>
        <button type="button" onclick="quiz6(value)" value="351" id="trykk">CST:351</button>
        <button type="button" onclick="quiz6(value)" value="352" id="trykk">CST:352</button>
        <button type="button" onclick="quiz6(value)" value="451" id="trykk">CST:451</button>
        <p id="result6"></p>
         <p>answer= 352 </p>
        <h1 id="finalResult"></h1>
      
        <p id="turns"></p>
        
        <button type="button" onclick="sub()">Submit to database</button>
        
        <p id="dbresult"></p>
        </div>
    </body>
</html>