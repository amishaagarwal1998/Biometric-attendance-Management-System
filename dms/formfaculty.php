<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html><body bgcolor="white">
<head>
<title>Faculty Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="formf.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-right">
        <li><a href='registerf.php'><span class="glyphicon glyphicon-log-in"><font face="Times New Roman">"Register</font></span> </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    
      
    </div>
  </div>
</div>

	
      
 
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1><font face="Times New Roman">Faculty</font></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="loginfaculty.php" method="post">
					<input class="text" type="text" name="x" placeholder="name" required=""><br>
					<input class="text" type="password" name="y" placeholder="Password" required=""><br>
					<input class="text" type="text" name="z" placeholder="Course-ID" required="">
					<input type="submit" value="LOGIN">
				</form>
			<font face="Times New Roman">	<p>Don't have an Account? <a href="registerf.php">  Signup!</a></p></font>
			</div>
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	
	<!-- //main -->
</body>
<font face="Times New Roman">
<form method="POST" action="index.php">
<input type="submit" value="Click to go back">
</form>
</font>
</html>