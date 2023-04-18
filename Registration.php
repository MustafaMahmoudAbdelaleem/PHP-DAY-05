<?php
    session_start();
    if(isset($_POST['submit'])){
        $user_name = $_POST['userName'];
        $password = $_POST['password'];
        // store data in cookies
        setcookie('userName' ,$user_name,time()+30);
        setcookie('password' ,$password,time()+30);
        //store data in database
        include('DB.php');
        if(!$conn){
            die("something went wrong couldn't conneect to database".mysqli_connect_error());
        }
        $sql ="INSERT INTO user_info(user_name,user_password) VALUES ('$user_name','$password')";
        $result = mysqli_query($conn,$sql);
        if(!$result){
            die("cannot insert data" .mysqli_connect_error());
        }        
        mysqli_close($conn);
        header('location: Login.php');
    }
    
?>
