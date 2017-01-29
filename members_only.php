<?php
  session_start();

  echo "<h1>Members only</h1>";

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>Members only content goes here</p>";
	echo "<a href=\"logout.php\">Logout</a>";
  }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	echo "<a href=\"login.php\">Login page</a>";
  }  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>KALYAN jewellers</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">

	<div id="container">
    
    	<div class="top">
        
        	<div class="top-logo">
            	<img src="images/Logo-Kal.png" alt="kal logo">
            </div>
            
            <div class="top_right">
            	
                <ul>
                	<li><span>Phone:</span> +6142564890</li>
                    <li><span>Email:</span> info@kalyanjwellers.com</li>
                    <li><a href="login.php"<span>Login</span> </a></li>
                    <li><a href="logout.php"<span>logout</span> </a></li>
                    <form action="">
                	Search: <input type="text">
                	</form>
                </ul>
                
                
            </div>
        
        </div>
        
        
        <div class="header">
            	
                <ul>
                	<li><a href="home.php">home</a></li>
                    <li><a href="aboutUs.php">about us</a></li>
                    <li><a href="kalstories.php">kalyan stories</a></li>
                    <li><a href="collection.php">collection</a></li>
                    <li><a href="brand1.php">Brands</a></li>
                    <li><a href="contactus.php">contact us</a></li>
                    <li><a href="registration.php">Registration</a></li>
                </ul>
                
        </div>
        
       
        <div class="slider">
            	
                <img src="images/crown-ring-banner.jpg" alt="slider">
                                
        </div>
        