<?php

    include_once("../database.php");
    if(isset($_POST['search']) && !empty(trim($_POST['search']))){
        $search_term = '%' . trim($_POST['search']). '%';

        $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id LIKE ? OR fname LIKE ? OR lname LIKE ?");
        $stmt->execute([$search_term,$search_term,$search_term]);

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(count($row) > 0){
            foreach($row as $rows){
                echo $rows['user_id']."-".$rows['fname']." ".$rows['lname']."<br>";
            }
        }else{
            echo "no one found"; 
        }
    }else{
        
    }
    
?>