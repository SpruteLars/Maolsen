<?php
session_start();
if(!isset($_SESSION['adminFullName'])){
        header('location:index.php');
    }


 include '../../../dbConnection2.php';
 $conn = getDbConnection();
function getAuthorInfo() {
   global $conn;
        
    $sql = "SELECT *
            FROM q_author
            WHERE authorId = " . $_GET['authorId'];    
     
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $record = $stmt->fetch(PDO::FETCH_ASSOC);  
    return $record;
}

if (isset($_GET['updateForm'])) {
        
       global $conn;
    //Admin submitted update form
    
    echo "Update form was submitted!";
    
    $sql = "UPDATE q_author SET firstName = :fName, lastName = :lName, gender = :gender, biography = :biography, picture = :picture, country = :country, profession = :prof where authorId = :authorId";
    $namedParameters = array();
    $namedParameters[':fName'] = $_GET['firstName'];
    $namedParameters[':lName'] = $_GET['lastName'];
    $namedParameters[':gender'] = $_GET['gender'];
    $namedParameters[':country'] = $_GET['country'];
    $namedParameters[':picture'] = $_GET['picture'];
    $namedParameters[':biography'] = $_GET['biography'];
    $namedParameters[':prof'] = $_GET['profession'];
    $namedParameters[':authorId'] = $_GET['authorId'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
  
    
}


if (isset($_GET['authorId'])) {
    
    $authorInfo = getAuthorInfo();  
    
    //print_r($authorInfo);
    
}




?>


<!DOCTYPE html>
<html>
    <head>
        <title> Update Author's Info </title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>

        <h1> Updating Author's Info </h1>
        
        <fieldset>
            
            <legend> Updating Author </legend>
            
            <form>
                
                
                 <input type="hidden" name="authorId" value="<?=$authorInfo['authorId']?>">
                 
                First Name: <input type="text" name="firstName" value="<?=$authorInfo['firstName']?>" /> <br />
                Last Name: <input type="text" name="lastName" value="<?=$authorInfo['lastName']?>"/> <br />
                Gender: <input type="radio" name="gender" value="F"
                            id="genderF"  
                            
                            <?php
                            
                                if ($authorInfo['gender']=="F") {
                                    echo "checked";
                                }
                            
                            ?>
                            
                            />
                            
                            
                            <label for="genderF"></label>Female
                         <input type="radio" name="gender" value="M"
                         
                            <?= ($authorInfo['gender']=="M")?"checked":"" ?>
                         
                            id="genderM"   /><label for="genderF"></label>Male <br />   
                Birth Date: <input type="date" name="dob" value="<?=$authorInfo['dob']?>"/><br /> 
                Death Date: <input type="date" name="dod" value="<?=$authorInfo['dod']?>"/><br /> 
                Profession: <input type="text" name="profession" value="<?=$authorInfo['profession']?>"/><br /> 
                Country: <select name="country">
                            <option>USA</option>
                            <option>Germany</option>
                            <option>China</option>
                            <option>India</option>
                        </select><br /> 
                Picture URL: <input type="text" name="picture"  value="<?=$authorInfo['picture']?>" />   <br>
                Biography: <br /> <textarea name="biography" cols="55" rows="5"><?=$authorInfo['biography']?></textarea><br>
                <input type="submit" value="Update Author" name="updateForm" action="loginProcess.php">
            </form>
            
        </fieldset>
        
    </body>
</html>