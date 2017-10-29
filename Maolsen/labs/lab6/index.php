<?php
    include '../../../dbConnection2.php';
    
    $conn = getDbConnection();
    
    function displayQuote(){
        global $conn;
        
        
         if(!empty($_GET['category'])){
            $sql =  "SELECT firstName, lastName, quote FROM q_author NATURAL JOIN q_quote NATURAL JOIN q_cat_quote NATURAL JOIN q_category where 1";
         
        }else{
            $sql = "SELECT firstName, lastName, quote FROM q_author NATURAL JOIN q_quote where 1 ";
        }
        $namedParameters = array();
        if(!empty($_GET['content'])){
            
        
            $sql = $sql . " AND quote LIKE :quoteContent";
            $namedParameters[":quoteContent"] = "%" . $_GET['content'] . "%";
        }
        if(!empty($_GET['gender'])){
            $sql = $sql . " AND gender = :gender" ;
            $namedParameters[":gender"] = $_GET['gender'];
        }
        if(!empty($_GET['country'])){
            $sql = $sql . " AND country = :country";
            $namedParameters[":country"] = $_GET['country'];
            
        }
        if(!empty($_GET['category'])){
            $sql = $sql . " AND category = :category";
            $namedParameters[":category"] = $_GET['category'];
        }
        if($_GET['order'] == "lastName"){
            $sql = $sql . " ORDER by lastName";
            
        }else if($_GET['order']== "quote"){
            $sql = $sql . " ORDER by quote";
        }
        
        
        $stmt = $conn -> prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record){
            echo "<br><br>" . $record['quote'] . " " . $record['firstName'] . " ". $record['lastName'];
        }
    }
    
    function displayCountryOptions() {
        global $conn;
        $sql = "SELECT DISTINCT(country) FROM q_author ORDER by country";
        
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record){
            if($_GET['country']==$record['country']){
            echo "<option selected>". $record['country']."</option>";
            }
            else{
                 echo "<option>". $record['country']."</option>";
            }
        }
        
    }
    
    function displayCategoryOptions() {
        global $conn;
        $sql = "SELECT DISTINCT(category) FROM q_category ORDER by category";
        
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record){
            if($_GET['category']==$record['category']){
            echo "<option selected>". $record['category']."</option>";
            }else{
                echo "<option>". $record['category']."</option>";
            }
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Quote Finder</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1>Quote Finder</h1>
        <form method="get">
                <strong>Quote Content:</strong>
                <input type="text" name="content" value="<?=$_GET['content']?>">
                <br>
                <strong>Author's Gender:</strong>
                <input type="radio" name="gender" id="female" value="F"
                <?php
                if($_GET['gender'] == "F"){
                    echo "checked";
                }
                ?>
                >
                <label for="female">Female</label>
                <input type="radio" name="gender" id="male" value="M"
                                <?php
                if($_GET['gender'] == "M"){
                    echo "checked";
                }
                ?>
                >
                <label for="male">Male</label>
                <br>
                <strong>Author's Birthplace:</strong>
                <select name="country">
                    <option value="">Select a Country</option>
                    <?=displayCountryOptions()?>
                </select>
                <br>
                <strong>Category:</strong>  
                <select name="category">
                    <option value="">Select a Category</option>
                    <?=displayCategoryOptions()?>
                </select>
                <br>
                 <strong>Order by:</strong>
                 
                <input type="radio" name="order" id="name" value ="lastName"
                
                <?php
                if($_GET['order'] == "lastName"){
                    echo "checked";
                }
                ?>
                /><label for="name">Author</label>
                <input type="radio" name="order" id="quote" value ="quote"
                
                <?php
                if($_GET['order'] == "quote"){
                    echo "checked";
                }
                ?>
                /><label for="quote">Quote</label>
                <input type="submit" value="Filter" name="submit">
               
                
        </form>

        <hr />

        <div class="quotes">
            <?php
            displayQuote();
            ?>
            
            Quotes are displayed above.(if no quotes are shown you have filtered out all of them)
        </div>
        
    </body>
</html>