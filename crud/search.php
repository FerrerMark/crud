<?php

include_once("../database.php");

if (isset($_POST['search']) && !empty(trim($_POST['search']))) {
    $search_term = '%' . trim($_POST['search']) . '%';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id LIKE ? OR fname LIKE ? OR lname LIKE ?");
    $stmt->execute([$search_term, $search_term, $search_term]);

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($rows)) {
        foreach ($rows as $row) {
            $userId = $row['user_id'];
            $firstName = htmlspecialchars($row['fname']);
            $lastName = htmlspecialchars($row['lname']);
            echo "<a href='./profile.php?user_id=$userId'>$userId - $firstName $lastName<br></a>";
        }
    } else {
        echo "No one found";
    }
} else {
    echo "Please enter a search term.";
}

?>
