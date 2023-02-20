<?php 
session_start();

include(__DIR__ . "/Log in/connection.php");
include(__DIR__ . "/Log in/functions.php");

$user_data = check_login($con);

$_SESSION;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="Log in/public/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <section class="header">
    <div class="logoutc"><a href="Log in/logout.php" class="logout">Log out</a></div>
    <nav>
      <a href="index.php"><img src="Images/isd logo.jpg" alt=""></a>
      <div class="nav-links" id="navLinks">
      <i class="fa fa-times" onclick="hideMenu()"></i> 
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="Schedule/Schedulepage.php">SCHEDULE</a></li>
          <li><a href="Topics/Topics.php">TOPICS</a></li>
          <li><a href="Resource Page/Resourcepage.php">RESOURCES</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
      <h1>MATH APPLICATIONS AND INTEPRETATIONS</h1>
      <p>Math, is sometimes hard. However, if you try hard enough you'll still struggle with math, <br> but at least you'll be better at trying hard things!
      </p>
    </div>
  </section>


<!--Class Overview--->

<section class="overview">
  <h1>Class Overview</h1>
  <h2>Applications and Interpretations
  </h2>
  <h2>Year 1 Oxford Book	Topic</h2>
  
  <ul>
    <li> Ch 3.2, 4.2 		Equation of a line, Linear Models  </li>
    <li> Ch 4.1, 4.3 		Functions, Inverse Functions</li>
    <li> Ch 2.4, 4.5 		Linear Regression</li>
    <li> Ch 4.4      			Arithmetic Sequences & Series</li>
    <li> Ch 6          			Polynomial, Power Models, Non-linear Regression</li>
    <li> Ch 6          			Transformations</li>
    <li> Ch 7.1      			Geometric Sequences & Series, Applications </li>
    <li> Ch 7.2      			Amortization and Annuities  </li>
    <li> Ch 7.3 - 7.5     		Exponential & Logarithmic Models, Logistic Models</li>
    <li> Ch 1.1      			Estimation, Rounding, Significant Figures</li>
    <li> Ch 1.2      			Triangle Trigonometry </li>
    <li> Ch 1.3      			Geometry</li>
    <li> Ch 3.1 - 3.3     		Coordinate Geometry, Voronoi Diagrams</li>
    <li> Ch 3.4 - 3.6 		Vectors - only HL </li>
    <li> Ch 8.1 - 8.2 		Periodic Models</li>
    <li> Ch 8.3 - 8.5  		Complex Numbers  - only HL </li>
    <li> Ch 2.1 - 2.3     		Descriptive Statistics - all courses </li>
    <li> Ch 5          			Basic Probability - all courses</li>
    <li> Ch 13       			Random Variables and Probability Distributions</li>
    <li> Ch 14       			Statistical Tests (Spearman's, Hypothesis, Chi-squared)</li>
    <h2>Year 2
      Oxford Book Topic
    </h2>
    <li> Ch 10       			Differential Calculus</li>
    <li> Ch 11.1 - 11.3 	Integration</li>
    <li> Ch 11.4 - 11.5	Differential Equations, Slope Fields - only HL</li>
    <li> Ch 15       			Graph Theory - only HL</li>
    <li> Ch 9.1 - 9.4 		Matrices, Matrix Transformations   - only HL</li>
    <li> Ch 9.5 - 9.6 		Transition Matrices  - only HL</li>
    <li> Ch 9.7      			Eigenvalues and Eigenvectors - only HL </li>
    <li> Ch 12       			Motion Variable Velocity, Coupled Differential Equations - only HL</li>
    <h2> IB SYLLABUS APPLICATIONS & INTEPRETATION</h2>
    <li> 1. Number and Algebra</li> 
    <li> 2. Functions</li>
    <li> 3. Geometry and Trigonometry</li>
    <li> 4. Probability and Statistics</li>
    <li> 5. Calculus</li>
  </ul>
</section>


<section class="footer"> 
  <h4>Contact for Help</h4>
  <p>Looking for extra help, contact me here!</p>
  <a href="mailto:lindonjon88@gmail.com" target="_blank">lindonjon88</a>
</section>
 

<script src="Log in/public/js/home.js"></script>



    
</body>
</html>
</body>
</html>
