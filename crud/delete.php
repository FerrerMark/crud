<?php

    include_once("../database.php");

    $user_id= $_GET['user_id'];
    $stmt = $pdo->prepare('DELETE FROM users WHERE user_id= ? ');
    $stmt->execute([$user_id]);

    echo json_encode($stmt);

?>