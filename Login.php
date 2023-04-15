<?php
session_start();
?>

<?php
            ////////////////////////* Connect to database *////////////////////////
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "PHPD5";
            $conn = mysqli_connect($host, $username, $password, $dbname);

            if (!$conn) {
            	die("Connection failed: " . mysqli_connect_error());
            }

            ////////////////////////! CREATE TABLE IN DATABASE *////////////////////////
            //     $sql = "CREATE TABLE IF NOT EXISTS SIGNIN(
            //    id int AUTO_INCREMENT PRIMARY KEY , 
            //    user_name VARCHAR(255) NOT NULL ,
            //    user_pass INT(25) NOT NULL
            //    )";
            // $retval = mysqli_query( $conn,$sql );
   
            // if(! $retval ) {
            //    die('Could not create table: ' . mysqli_error($conn));
            // }
             
            // echo "<br>Database Table  created successfully\n";

            ////////////////////////^ GET THE INPUT INSIDE DATABASE *///////////////////////

            mysqli_select_db( $conn,$dbname );
            // $Uname = " " ;
            // $Upass = " " ;
            if(!empty($_POST['login']))
            {
              $uname = $_POST['Uname'];
              $upass = $_POST['Upass'];

              $sql = mysqli_query($conn,"SELECT * FROM signup WHERE user_name= '$uname' AND user_pass='$upass'");
                  $num =mysqli_num_rows($sql);
                  if($num>0){
                    //echo "found";
                    $row = mysqli_fetch_assoc($sql);
                    $_SESSION['USER_ID'] = $row['id'];
                    $_SESSION['Uname'] = $row['user_name'];
                    header('location: index.php');
                    exit();
                  }else{
                    $errormsg = "Please Enter Valid Data" ;
                    echo "<h4  style=color:red;>".$errormsg."</h4>" ;
                  }
          
                
            }
           
            


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
<h2>LOGIN</h2>
<p>Please fill in your credentials to login.</p>
            <form  method = "POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name = "Uname" required>
                </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name = "Upass" required>
               </div>
               
              <a href="./index.php"><button type="submit" name ="login" class="btn btn-primary" value="sign_in">Login</button></a>
              <p>Don't have an account? <a href="./register.php">sign up now.</a></p>
            </form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
