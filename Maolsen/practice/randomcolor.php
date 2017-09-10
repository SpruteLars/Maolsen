<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>funk</title>
        <style>
            body{
                <?php
                    $red = rand(0,255);
                    $green = rand(0,255);
                    $blue = rand(0,255);
                    $alpha = (rand(0,100)/100);
                    echo "background-color:rgba($red,$green,$blue,$alpha);";
        ?>
                
            }
        </style>
    </head>
    <body>
    <h1>Hello</h1>
    </body>
</html>