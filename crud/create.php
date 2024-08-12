<?php
    
    include_once("../database.php");    
    
    if(isset($_POST['first_name']) && isset($_POST['last_name'])){
        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        
        $stmt = $pdo->prepare("INSERT INTO users (fname,lname) values(?,?)");
        $stmt->execute([$fname,$lname]);

        if($stmt){
            echo "Data inserted successfully!";
        } else {
            echo "Failed to insert data.";
        }
    }

?>