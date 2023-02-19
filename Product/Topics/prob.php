<?php 
session_start();

include("../log in/public/connection.php");
include("../log in/public/functions.php");

$user_data = check_login($con);

$_SESSION;


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css"rel="stylesheet" href="subtopics.css">
</head>
<body>
    <section class="header">
    <div class="logoutc"><a href="../Log in/public/logout.php" class="logout">Log out</a></div>
        <nav>
          <a href="../Log in/public/index.php"><img src="../Images/isd logo.jpg" alt=""></a>
          <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i> 
            <ul>
              <li><a href="../Log in/public/index.php">HOME</a></li>
              <li><a href="../Schedule/Schedulepage.php">SCHEDULE</a></li>
              <li><a href="Topics.php">TOPICS</a></li>
              <li><a href="../Resource Page/Resourcepage.php">RESOURCES</a></li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
          <div class="text-box">
            <div class="text-box">
                  <h1>PROBABILITY & STATISTICS</h1>
                  <p>Explore the many topics that we will cover <br> they are very hard to resist falling asleep during!</p>
                </div>
                </nav>
        </section>

        <section class="lecture">
                    <section class="docu1"> 
                    <iframe src="https://docs.google.com/document/d/e/2PACX-1vRetdzqK1sLOyRbefsqafe-NLAAskhhbgCcTEcBJP5kgB5uoO2qvq0Y7c0oGEtlaQ/pub?embedded=true"></iframe>
                    </section>
                    <section class="docu2">
                    <iframe src="https://docs.google.com/document/d/e/2PACX-1vS65_Xo_-7Pzg5zTQoxOyKf8FZGK5btOWXKmK90MceMzi-vSTpJpj4JNYpgONq4Ng/pub?embedded=true"></iframe>
                    </section>
                </section>

        <section class="footer"> 
  <h4>Contact for Help</h4>
  <p>Looking for extra help, contact me here!</p>
  <a href="mailto:lindonjon88@gmail.com" target="_blank">lindonjon88@gmail.com</a>
</section>