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
    <link rel="stylesheet" href="topics.css">
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
              <li><a href="Topics.php">TOPICS</a></li>
              <li><a href="../Resource Page/Resourcepage.php">RESOURCES</a></li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
          <div class="text-box">
            <div class="text-box">
                  <h1>TOPICS</h1>
                  <p>Explore the many topics that we will cover <br> they are very hard to resist falling asleep during!</p>
                </div>
                </nav>
        </section>

        <section>
          <div class="toptext">
            <ul>
              <li><a href="nums.php">Numbers and Algebra</a>
              <ul>
                <li>Sequences & Series</li>
                <li>Proofs</li>
                <li>Counting & Binomial</li>
                <li>Complex Numbers</li>
                <li>Complex Numbers Advanced</li>
                <li>Solving Systems of Equations</li>
                </ul>
            </li>  
            <li><a href="functions.php">Functions</a>
              <ul>
                <li>Functions</li>
                <li>Quadratics</li>
                <li>Polynomials</li>
                <li>Transformations</li>
                <li>Exponents & Logarithms</li>
              </ul>
            </li>
              <li><a href="geo.php">Geometry and Trigonometry</a>
              <ul>
                <li>Geometry</li>
                <li>Triangle Trig</li>
                <li>Voronoi Diagrams</li>
                <li>Periodic Models</li>
              </ul>
            </li>
          </li>
            <li><a href="prob.php">Probability and Statistics</a>
            <ul>
              <li>Statistics</li>
              <li>Regression</li>
              <li>Probability</li>
              <li>Probability Distributions</li>
              <li>Statistical Tests</li>
            </ul>
          </li>
              <li><a href="calc.php">Calculus</a>
              <ul>
                <li>Differential Calculus</li>
                <li>Integration</li>
                <li>Differential Equations</li>
                <li>Coupled Diff Equations</li>
              </ul>
              </li>
            </ul>
          </div>
        </section>

        <section class="footer"> 
  <h4>Contact for Help</h4>
  <p>Looking for extra help, contact me here!</p>
  <a href="mailto:lindonjon88@gmail.com" target="_blank">lindonjon88@gmail.com</a>
</section>
 