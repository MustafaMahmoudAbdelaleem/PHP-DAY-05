<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Signup</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Sign Up</h1>
        <p><small>Fill The Following Form </small></p>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="Registeration.php">
                    <div class="mb-3">
                        <label class="form-label" for="userName">Username</label>
                        <input type="text" class="form-control" name="userName" id="userName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="signup">
                    <input class="btn btn-secondary" type="button" name="reset" value="reset">
                </form>
                <div class="my-3">
                    <p><small>Already have an account<span><a style="text-decoration:none;" href="Login.php"> Login here</a></span></small></p>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>   
