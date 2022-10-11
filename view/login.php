<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="form-container">
        <h1>Welcome to the Login Page!!</h1>

        <br></br>

        <form action="login.php" method="POST">

            <input type="text" name="username" placeholder="Enter Your UserName" required> <br></br>

           <input type="password" name="password" placeholder="Enter Your Password" required>  <br></br>

           <input type="text" name="user_type" placeholder="User/Admin" required> <br></br>
	
            <button name="submit" class="btn">Login</button>

                <br></br>

            <p>Don't have an account? <a href="register.php">SignUp Here</a></p>
             
        </form>  
    </div>
</body>
</html>