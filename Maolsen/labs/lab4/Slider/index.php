 <?php
    $backgroundImage = "img/sea.jpg";
    
?>

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
     
        <form>
            <input type="text" name="keyword"/>
            <input type="radio" name="layout"/>Horizontal
            <input type="radio" name="layout"/>Vertical
            <input type="submit" value="Submit"/>
        </form>
        
        
                
            
            
            
        <?php
          // if(issest($_GET["keyword"])){
            
            //include 'Slider/api/pixabayAPI.php';
            //$imageURLs = getImageURLs($_GET['keyword']);
            //print_r($imageURLs);
            //}
            //for ($i = 0;$i < count; $i++){
              //  if($i == count-5){
                //echo "<img src=''/>";
                //}
            //}
            
            //function getImages(){
            
            
            
              if(isset($_GET['keyword'])){  
                echo "keyword typed: " . $_GET['keyword'] . "<br/>";
                
                include 'api/pixabayAPI.php';
                $imageURLs = getImageURLs($_GET['keyword']);
               
                
                
            }
            
           
            if(isset($_GET['layout'])){
                
            }
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                if(!isset($imageURLs)){
                echo "type a keyword to display a slideshow <br> with random pictures from pixabay";
            }else{
                for ($i = 0; $i < 5; $i++) {
                    do {
                       $randomIndex = rand(0,count($imageURLs));
                    } while (!isset($imageURLs[$randomIndex]));
                    echo '<div class="item';
                    echo ($i==0)?"active": "";
                    echo '"/>';
                    echo '<img src="' . $imageURLs[rand(0,$randomIndex)]. '" />';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
                }
            
                ?>
                
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <ol class"carousel-indicators">
                    <?php
                    for ($i = 0;$i < 5; $i++){
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)?"class ='active'": "";
                        echo "></li>";
                    }
                    ?>
                </ol>
                <?php
            }
                ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>