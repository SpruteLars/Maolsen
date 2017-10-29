<?php
include '../../../dbConnection2.php';

$conn = getDbConnection();


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


?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
                
        <form>
            Firstname: <input type="text" name="firstName"/>
            Lastname: <input type="text" name="lastName"/>
            Country: <input type="text" name="country"/>
            Gender: <input type="radio" name="gender" value="F" id="female"/> <label for="female">F</label>
            <input type="radio" name="gender" value="M" id="male"/><label for="male">M</label>
            profession: <input type="text" name="profession"/>
            Date of death: <input type="text" name="dod"/>
            Date of Birth: <input type="text" name="dob"/>
            Biography: <input type="text-area" name="biography"/>
            picture: <input type="text" name="picture"/>
            Addedby:<input type="text" name="addedby"/>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>