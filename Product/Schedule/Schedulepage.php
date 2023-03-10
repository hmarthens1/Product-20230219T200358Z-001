<?php 
session_start();

include(__DIR__ . "/Log in/public/connection.php");
include(__DIR__ . "/Log in/public/functions.php");

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
    <link rel="stylesheet" href="schedule.css">
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
              <li><a href="Schedulepage.php">SCHEDULE</a></li>
              <li><a href="../Topics/Topics.php">TOPICS</a></li>
              <li><a href="../Resource Page/Resourcepage.php">RESOURCES</a></li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
          <div class="text-box">
              <h1>SCHEDULE</h1>
              <p>Don't know what is due, neither do I. <br> But here is a schedule - if we follow it closely, we'll at least be lost in an organized way!</p>
            </div>
            </nav>
        </section>

        <section class="container1">
          
          <section class="doc">
            <iframe src="https://docs.google.com/document/d/e/2PACX-1vSskkRqIN9xTIsVJPwV-lPHxsGrfjpxOXMHYTW4nXhaOExOw0ObZgwA939dhDetwg/pub?embedded=true"></iframe>
            </section>
            <section class="cal">
              <iframe src="https://calendar.google.com/calendar/u/0/embed?color=%23f83a22&src=isd.sn_hkc0eoecqoh28ps0nee41c58ic@group.calendar.google.com" frameborder="0"></iframe>
              </section>
            </section>

<section class="footer"> 
  <h4>Contact for Help</h4>
  <p>Looking for extra help, contact me here!</p>
  <a href="mailto:lindonjon88@gmail.com" target="_blank">lindonjon88@gmail.com</a>
</section>
 
    <script src="schedule.js"></script>
</body>
</html>