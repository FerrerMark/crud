<?php
include("../database.php");

$data = $_POST; // Collect POST data

$user_id = $data['user_id'];
$first_name = $data['first_name'];
$last_name = $data['last_name'];

try {
    $query = $pdo->prepare("UPDATE users SET fname = ?, lname = ? WHERE user_id = ?");
    $query->execute([$first_name, $last_name, $user_id]);

    echo "User updated successfully.";
    print_r($data);
} catch (PDOException $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
}
?>
