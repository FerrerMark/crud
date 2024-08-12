<?php

include_once("../database.php");

$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
    echo '
        <tr>
            <td>'.$row['user_id'].'</td>
            <td>'.$row['fname'].'</td>
            <td>'.$row['lname'].'</td>
        </tr>
    ';
}
?>