<?php 
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../../index.php");
						die;
					}
				}
			}
			echo "<span style='font-family: 'roboto', sans-serif; font-size: 14px; color: white;'>invalid email or password!</span>";
		}else
		{
			echo "<span style='font-family: 'roboto', sans-serif; font-size: 14px; color: white;'>invalid email or password!</span>";
		}
	}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>
    <form class="form" method="post">
        <h1 class="heading">Login</h1>
          <input type="email" placeholder="Email" autocomplete="off" class="email" name="email" required>
          <input type="password" placeholder="Password" autocomplete="off" class="password" name="password"required> 
          <button id='submit' class="submit-btn">Log in</button>
          <a href="register.php" class="link">Don't have an account ? Register one</a>
    </form>

    <script src="../public/js/login.js"></script>
</body>
</html>