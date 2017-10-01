 <?php
 include 'api/pixabayAPI.php';
 if(isset($_GET['layout'])){
                $imageURLs = getImageURLs(($_GET['keyword']),($_GET['layout']));
            }else{
                $imageURLs = getImageURLs($_GET['keyword']);
            }
            
            
    if(empty($_GET['keyword'])){
        $backgroundImage = "img/sea.jpg";
    }else{
        $random = rand(0,count($imageURLs));
        $backgroundImage = "$imageURLs[$random]";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
            @import url(css/styles.css);
            body{
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
         
           <h1>Type a keyword</h1>
     
        <form>
            <input type="text" name="keyword"/>
            <input type="radio" name="layout" value="horizontal"/>Horizontal
            <input type="radio" name="layout" value="vertical"/>Vertical
            <select name="pictures">
            <option value="">Select one</option>
            <option value="banana">banana</option>
            <option value="dog">dog</option>
            <option value="cat">cat</option>
                </select>
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
                
                $keyword = $_GET['keyword'];
            }
            if(empty ($_GET['pictures'])&&empty ($_GET['keyword'])){
                echo "<h2 style='color: red;'>Error: fill out either the text input or the dropdown menu</h2>";
                return;
                exit; 
            }
            if(!empty ($_GET['pictures'])){
                $keyword = $_GET['pictures'];
            }
            
           
            
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                    <?php
                    for ($i = 0;$i < 7; $i++){
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)?"class ='active'": "";
                        echo "></li>";
                    }
                    ?>
                </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                if(!isset($imageURLs)){
                echo "type a keyword to display a slideshow <br> with random pictures from pixabay";
            }else{
            
                for ($i = 0; $i < 7; $i++) {
                    do {
                       $randomIndex = rand(0,count($imageURLs));
                    } while (!isset($imageURLs[$randomIndex]));
                    echo '<div class="item ';
                    echo ($i==0)?"active": "";
                    echo '"/>';
                    echo '<img src="' . $imageURLs[rand(0,$randomIndex)]. '" />';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
                }
            
                ?>

                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                
                <?php
            }
                ?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
    </body>
</html>