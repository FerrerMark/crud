<?php
    include_once("database.php");
    $user_id = $_GET['user_id'];

    $stmt = $pdo->prepare("SELECT * FROM users where user_id = ?");
    $stmt->execute([$user_id]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['fname']." ".$row['lname']?></title>
    <link rel="stylesheet" href="./cssFolder/bootstrap-5.3.3-dist/css/bootstrap.css">
    <script src="./cssFolder/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</head>
<body>
    <div class="container bg-primary mt-1">
        <div class="row">
            <div class="col-6 bg-secondary">
                <div class="card m-2">
                    <div class="card-body text-center ">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">
                            <?php echo $row['fname']." ".$row['lname']?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-6 bg-secondary">
                <div class="card m-2">
                    <div class="card-body text-center ">
                        <h5 class="my-3">
                            <?php echo $row['fname']." ".$row['lname']?>
                            <br><hr>
                            <?php echo $row['user_id']?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>