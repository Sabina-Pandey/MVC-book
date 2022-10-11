<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
   
    <div class="register">
        <h1>Welcome to the Registration!</h1>

        <br></br>

        <form action="" method="POST">

            Fullname:
            <input type="text" name="fullname" placeholder="Enter your fullname">
                <br></br>

            Username:
            <input type="text" name="username" placeholder="Enter your username"> 
                <br></br>

            Email:
            <input type="email" name="email" placeholder="Enter your email"> 
                <br></br>

            Password:
            <input type="password" name="password" placeholder="Enter your password">
                <br></br>

	        Confirm Password:
			<input type="password" placeholder="Confirm your password" name="confirm_password">
                <br></br>
			
            Gender:
            <input type="text" name="gender" placeholder="Enter your gender"> 
                <br></br>

            UserType:
			<input type="text" name="user_type" placeholder="User/Admin">
			    <br></br>

             <button name="submit" class="btn">Register</button>

            <br></br>

            <p>Have an account? <a href="login.php">Login Now</a></p>
            
        </form>  
    </div> 
</body>
</html>