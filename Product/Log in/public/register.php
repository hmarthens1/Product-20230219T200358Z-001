<?php 

session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($name) && !empty($email) && !empty($password)){
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,name,email,password) values ('$user_id','$name','$email','$password')";


            mysqli_query($con, $query);

            header("location: login.php");
        }else{
            echo "Please enter some valid information!";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>

    <form class="form" method="post">
            <h1 class="heading">Register</h1>
            <input type="text" placeholder="Name" autocomplete="off" class="name" name="name"required>
            <input type="text" placeholder="Email" autocomplete="off" class="email" name="email" required>
            <input type="text" placeholder="Password" autocomplete="off" class="password" name="password"required>
            <button class="submit-btn">Register</button>
            <a href="login.php" class="link">already have an account ? log in here</a>
    </form>

    <script src="../public/js/login.js"></script>
</body>
</html>