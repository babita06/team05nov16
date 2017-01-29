<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');	

if( isset($_POST["email"])&& isset($_POST["email"]) )
{
	$email = $_POST["email"];
		
	$password = $_POST["password"];
	
	if ($email && $password)
	{
	  // if the user has just tried to log in
	
	  //make the database connection
	  $conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;

	  if ($numOfRows)
	  {
		// login successfully, keep the user's email
		$_SESSION['valid_user'] = $email;
	  }
	  $conn -> close();
	}
}
if (isset($_SESSION['valid_user']))
{
  header("location: members_only.php");  
}
else
{
  if (isset($email))
  {
    // if user tried and failed to log in
    echo "<b>Incorrect - Please try it again </b><br>";
	echo "<a href=\"registration.html\">Sign-up</a><br>";
  }
  else 
  {
    // user has not tried to log in yet or has logged out
    echo "<b>You are not logged in</b><br>";
  }

  // provide form to log in: same page for action  
  echo "<form method=post action=\"login.php\">";
  echo "<table>";
  echo "<tr><td>Email:</td>";
  echo "<td><input type=text name=email></td></tr>";
  echo "<tr><td>Password:</td>";
  echo "<td><input type=password name=password></td></tr>";
  echo "<tr><td colspan=2 align=center>";
  echo "<input type=submit value=\"Log in\"></td></tr>";
  echo "</table></form>";
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
                    <li><span font color=white>Email:</span> info@kalyanjwellers.com</li>
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
        



