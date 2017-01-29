<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>KALYAN jewellers</title>

<link href="style.css" rel="stylesheet" type="text/css">
<script src="js/myScript.js"></script>

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
                	<li><span>Phone:</span> +91.987.654.3210</li>
                    <li><span  font color=white>Email:</span> info@bluenetshine.com</li>
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
     
        
        
        <div class="content">  <!-- start of Content Part-->
                <h1> New Membership Form</h1>
                <h2> Please enter your profile</h2>
                <p><i> Fields marked with an asterick(*) must be entered.</i></p>
                <div class="ourForm">
                    <form action="registration_process.php" method="post">
 <table border="0">
	<tr>
    	<td align="right">* Name:</td>
    	<td><input type="text" id="name" name="name" required></td>
	</tr>
	<tr>
    	<td align="right">* Email:</td>
    	<td><input type="email" name="email" id="email" required></td>
	</tr>
	<tr>
    	<td align="right">* Password:</td>
    	<td><input type="password" id="password" name="password" required></td>
        <td id="pwd_msg" style="color:red;"></td>
	</tr>
	<tr>
    	<td align="right">* Re-try:</td>
    	<td><input type="Password" id="rePassword" name="rePassword" onChange="checkRePassword(document)"></td>
	</tr>
	<tr>
    	<td align="right"><input type="submit" name="submit" value="Submit" onClick="return validateInfo(document)"></td>
    	<td><input type="reset" name="reset" value="Clear"></td>
	</tr>
  </table> 
</form>
                   </div>
                
                
                
                
                
                
                                
        </div> <!-- ending of Content Part-->
        
        
        <div class="footer">
            	
                <p>© 2017 KALYAN jewellers (P) Ltd.</p>
                                
        </div>
    
    </div>

</div>

</body>
</html>