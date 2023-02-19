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
    <title>Resources</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources.css">
</head>
<body>
    <section class="header">
    <div class="logoutc"><a href="../Log in/public/logout.php" class="logout">Log out</a></div>
        <nav>
          <a href="../index.php"><img src="../Images/isd logo.jpg" alt=""></a>
          <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i> 
            <ul>
              <li><a href="../index.php">HOME</a></li>
              <li><a href="../Schedule/Schedulepage.php">SCHEDULE</a></li>
              <li><a href="../Topics/Topics.php">TOPICS</a></li>
              <li><a href="Resourcepage.php">RESOURCES</a></li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
          <div class="text-box">
              <h1>RESOURCES</h1>
              <p>Wow, you are still struggling! Impressive. <br> Well here are some resources, but if they don't work, don't worry, I can always recommend a good therapist for you</p>
            </div>
            </nav>
        </section>
        <section class="resources">
        <ul class="Videos">
            <p>Video Sites</p>
            <li><a href="https://www.youtube.com/channel/UCeScLgPpwj1jZnN045CcVOg">OSC Videos</a></li>
            <li><a href="https://www.youtube.com/playlist?list=PLmrVBIbuhI6k66ZBXa3wGeJ6Bvq2qhH03">Ryan Cox</a></li>
            <li><a href="https://www.youtube.com/channel/UCeScLgPpwj1jZnN045CcVOg">Revision Village</a></li>
        </ul>
        <ul class="Practice">
            <p>Practice Sites</p>
            <li><a href="https://www.khanacademy.org/">Khan Academy</a></li>
            <li><a href="https://kognity.com/">Kognity</a></li>
            <li><a href="https://www.myimaths.com/">MyiMaths</a></li>

        </ul>
        <ul class="Other">
            <p>Other Sites</p>
            <li><a href="https://ibmathsresources.com/">IB Math Resources</a></li>
            <li><a href="https://www.youtube.com/channel/UCeScLgPpwj1jZnN045CcVOg">Oxford Study Course Videos</a></li>
            <li><a href="https://ib-academy.nl/math-ai-1">IB-Academy</a></li>

        </ul>
            
        </section>

        <section class="footer"> 
  <h4>Contact for Help</h4>
  <p>Looking for extra help, contact me here!</p>
  <a href="mailto:lindonjon88@gmail.com" target="_blank">lindonjon88@gmail.com</a>
</section>
 
    <script src="resources.js"></script>
</body>
</html>