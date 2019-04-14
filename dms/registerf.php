<html>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="registerf1.css" rel="stylesheet" id="bootstrap-css">
<script src="registerf2.js"></script>
<script src="registerf2.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body background="webD/bio.jpg">
<div class="container">
<h1><font color="green" >Registration</font></h1>
           
                
	
	
				<form method="POST" action="connectfaculty.php"><br>
                <div class="form-group">
				
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="a" id="name" placeholder="Username" class="form-control" required="" autofocus >
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="b" id="regno" placeholder="Password" class="form-control" required="" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course </label>
                    <div class="col-sm-9">
                        <input type="text" name="c" id="course" placeholder="Course " class="form-control" required="" >
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="courseID" class="col-sm-3 control-label">Course ID</label>
                    <div class="col-sm-9">
                        <input type="text" name="d" id="courseID" placeholder="Course ID" class="form-control" required="">
                    </div>
                </div>
				
                
               
               
                </div>
				
               
				<center><button type="submit"  formaction="http://localhost:8012/dms/connectfaculty.php" class="btn btn-success btn-block"><font color="white" size="5" align="center">Register</font></button></center>
				
				              
				
				
            </form><!-- /form -->
        </div> <!-- ./container -->
		
		</body>
		<form method="POST" action="formfaculty.php">
		<br><br><br><br><br>
<input type="submit" value="Click to go back">
<br><br><br><br>

</form>
</html>