<html>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="testing2.css" rel="stylesheet" id="bootstrap-css">
<script src="testing3.js"></script>
<script src="testing3.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body background="webD/bio.jpg">

<div class="container">
           
                <h1><font color="green" >Registration</font></h1>
	
				
				<form method="POST" action="connectstudent.php"><br>
				
                <div class="form-group">
				
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="a" id="name" placeholder="Username" class="form-control" required="" autofocus >
                    </div>
                </div>
                <div class="form-group">
                    <label for="regno" class="col-sm-3 control-label">Reg. no.</label>
                    <div class="col-sm-9">
                        <input type="number" name="b" id="regno" placeholder="Registration number" class="form-control" required="" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="email" name="c" id="email" placeholder="Email" class="form-control" required="" >
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="courseID" class="col-sm-3 control-label">Course ID</label>
                    <div class="col-sm-9">
                        <input type="text" name="d" id="courseID" placeholder="Course ID" class="form-control" required="">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="e" id="password" placeholder="Password" class="form-control" required="">
                    </div>
                </div>
                
               
               
                </div>
				
                
				<button type="submit"  formaction="http://localhost:8012/dms/connectstudent.php" class="btn btn-success btn-block"><font color="green" size="5" align="center">Register</font></button>
				
            </form><!-- /form -->
        </div> <!-- ./container -->
		
		</body>
		<form method="POST" action="formstudent.php">
		<br><br><br><br><br><br><br>
<input type="submit" value="Click to go back">

</form>
</html>