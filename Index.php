<?php
session_start();

$host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "PHPD5";
            $conn = mysqli_connect($host, $username, $password, $dbname);

            if (!$conn) {
            	die("Connection failed: " . mysqli_connect_error());
            }

        //     if(isset($_SESSION['USER_ID']) && isset($_SESSION['Uname'])){
           
        //         $_SESSION['USER_ID'] = $row['id'];
        //         $_SESSION['Uname'] = $row['user_name'];
        // //    unset($_SESSION['USER_ID']);
        //    unset($_SESSION['USER_NAME']);
         //    die();
        //     }
if (isset($_SESSION['Uname']) && isset($_SESSION['USER_ID'])) {
	$username = $_SESSION['Uname'];
	// echo "Hello $username!";
} else {
	header("Location: login.php");
	exit();
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<h1>welcome <?php echo $username ?>!!</h1>

   
<div class="btn btn">
    <a href="./logout.php"><button class="btn btn-outline-danger">SIGN OUT</button></a>
</div>

</body>
</html>
