<?php
session_start();
if(isset($_SESSION["isLogged"]) && $_SESSION["isLogged"] === true){
    header("location: welcome.php");
    exit;
}

if(isset($_POST['login'])){   
        $user_name = $_POST['userName'];
        $password = $_POST['password'];
        include('db.php');
        $sql = "SELECT * FROM user_info WHERE user_name='$user_name' AND user_password='$password'";
        $result = mysqli_query($conn ,$sql);
        if($result -> num_rows ==1){
            $_SESSION['isLogged'] = true;
            setcookie('userName' ,$user_name,time()+60);
            setcookie('password' ,$password,time()+60);
            $_SESSION['userName'] =$user_name;
            mysqli_close($conn);
            header('location: welcome.php');
            exit;
        }else{
            echo "<div class='text-center aler alert-danger'>Username or password not match</div>";
        }    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    <div class="container mt-5">
        
        <h1>Login</h1>
        <p><small> Fill this form to login </small></p>
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="userName">Username</label>
                        <input class="form-control" type="text" name="userName" id="userName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>
                    <input class="btn btn-primary" type="submit" name="login" value="Login">
                    <a class="btn btn-secondary" role="button" href="Index.php">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
