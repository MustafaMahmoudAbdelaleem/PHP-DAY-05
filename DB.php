<?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = " Day05";
            $conn = mysqli_connect($host, $username, $password, $dbname);

            if (!$conn) {
            	die("Connection failed: " . mysqli_connect_error());
            }
            
            //     $sql = "CREATE TABLE IF NOT EXISTS SIGNUP(
            //    id int AUTO_INCREMENT PRIMARY KEY , 
            //    user_name VARCHAR(255) NOT NULL ,
            //    user_pass INT(25) NOT NULL,
            //    user_COpass INT(25) NOT NULL
            //    )";
            // $retval = mysqli_query( $conn,$sql );
   
            // if(! $retval ) {
            //    die('Couldn't create table: ' . mysqli_error($conn));
            // }
             
            // echo "<br>Database Table  created successfully\n";


            
                    $userName = $_POST['Uname'];
                    $userPass = $_POST['Upass'];
                    $userCoPass = $_POST['Co_Upass'];

                    $sql = "INSERT INTO signup (user_name,user_pass,user_COpass) VALUES ('$userName','$userPass','$userCoPass')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "New user created successfully";
                        header("Location: Login.php");
                       
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        header("Location: Registration.php");
                        
                    };
                    
                                mysqli_close($conn);
                             
                                exit();
            
                        // $Error =array();
                        // if (empty($userName) OR empty($userPass) OR empty($userCoPass)) {
                        //     array_push($Error,"All fields are required");
                        //    };

                        //    if (!filter_var($userName, FILTER_VALIDATE_EMAIL)) {
                        //     array_push($Error, "Email is not valid");
                        //    }
                        //    if (strlen($userPass)<8) {
                        //     array_push($Error,"Password must be at least 8 charactes long");
                        //    }
                        //    if ($userPass!==$userCoPass) {
                        //     array_push($Error,"Password doesn't match");
                        //    }
?>
