<?php
include("../database.php");

$user_id = $_GET['user_id'];

header('Content-Type: application/json'); // Set the content type to JSON

try {
    $query = $pdo->prepare("SELECT user_id, fname, lname FROM users WHERE user_id = ?");
    $query->execute([$user_id]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Return user data as JSON
        // echo $user['fname'] . ' ' . $user['lname'];
        echo json_encode($user);
    } else {
        // Return an error message
        echo json_encode(['error' => 'User not found.']);
        
    }
} catch (PDOException $e) {
    // Return an error message
    echo json_encode(['error' => 'Error: ' . htmlspecialchars($e->getMessage())]);
}
?>
