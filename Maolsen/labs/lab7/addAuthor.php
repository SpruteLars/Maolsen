<?php
session_start();
if(!isset($_SESSION['adminFullName'])){
        header('location:index.php');
    }
include '../../../dbConnection2.php';

$conn = getDbConnection();

if (isset($_GET['addForm'])){
    

$sql = 'INSERT INTO `q_author` (`authorId`, `firstName`, `lastName`, `gender`, `dob`, `dod`, `profession`, `country`, `picture`, `biography`) VALUES (NULL, :firstName, :lastName, :gender, :dob, :dod, :prof, :country, :picture, :biography);';
$np  = array();
$np[':firstName'] = $_GET['firstName'];
$np[':lastName'] = $_GET['lastName'];
$np[':gender'] = $_GET['gender'];
$np[':dob'] = $_GET['dob'];
$np[':dod'] = $_GET['dod'];
$np[':prof'] = $_GET['profession'];
$np[':country'] = $_GET['country'];
$np[':picture'] = $_GET['picture'];
$np[':biography'] = $_GET['biography'];

$stmt = $conn->prepare($sql);
$stmt->execute($np);

}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
    <div id="add">
       <h2>Add a author</h2>
        <form>
            Firstname: <input type="text" name="firstName"/>
            Lastname: <input type="text" name="lastName"/><br>
            Country: <input type="text" name="country"/>
            Gender: <input type="radio" name="gender" value="F" id="female"/> <label for="female">Female</label>
            <input type="radio" name="gender" value="M" id="male"/><label for="male">Male</label><br>
            profession: <input type="text" name="profession"/>
            Date of death: <input type="text" name="dod"/>
            Date of Birth: <input type="text" name="dob"/><br>
            Biography: <input type="text-area" name="biography"/>
            picture: <input type="text" name="picture"/><br>
            Added by:<input type="text" name="addedby"/>
            <input type="submit" value="add author" name="addForm"/>
        </form>
        
    </div>      
    </body>
</html>