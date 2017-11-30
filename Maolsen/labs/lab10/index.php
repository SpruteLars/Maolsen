<?php


function displayImages() {

    if (isset($_POST['submitForm'])) { //checks whether the form has been submitted
       // print_r($_FILES);
        
       //    echo "File size: "  . $_FILES['myFile']['size'];
        
        move_uploaded_file($_FILES['myFile']['tmp_name'], "gallery/" . $_FILES['myFile']['name'] );
        
        //echo "<img src='gallery/". $_FILES['myFile']['name'] . "'>" ;
        
        
        $files = scandir("gallery/", 1);
        
        //print_r($files);
        
        for ($i = 0; $i < count($files)-2; $i++  ) {
        
          echo "<img src='gallery/".  $files[$i] . "' width='35' > <br />";
        
        }
        
    } //endIf

    
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 10: File Upload </title>
    </head>
    <body>


    <h1> Photo Gallery </h1>
    
    <form method="POST" enctype="multipart/form-data">
        
        Upload file: 
        
        <input type="file" name="myFile"/>
        
        <input type="submit" name="submitForm" value="Upload!" />
        
    </form>

    <br />

    <?=displayImages()?>


    </body>
</html>