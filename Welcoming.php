<?php
session_start();
if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] !==true){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>welcome</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                echo "<h1 class='display-4'>Hi ,".$_SESSION['userName']." Welcome user</h1>";
            ?>
        </div>
        <hr>
        <img class="img-fluid" src="./assets/indexPage.jpg">
        <div class="row">
            <div class="text-center my-3">
            <a class="btn btn-danger" href="Logout.php">Signout form your account</a>
            </div>
        </div>
    </div>
    
</body>
