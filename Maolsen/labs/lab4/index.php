<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
            @import url(Slider/css/styles.css);
            body{
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
    </head>
    <body>
        <?php
            if(!issest($_GET["keyword"]) ){
            
            include 'Slider/api/pixabayAPI.php';
            $imageURLs = getImageURLs($_GET['keyword']);
            print_r($getImageURLs);
            }
            for ($i = 0;$i < count; $i++){
                if($i == count-5){
                echo "<img src=''/>";
                }
            }
            
        ?>
        <form>
            <input type="text" name="keyword"/>
            <input type="submit" value="Submit"/>
        </form>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>