
<?php
session_start();
if(isset($_SESSION['regno']))
{
$p= $_SESSION['regno'];
$con=mysqli_connect("localhost","root","");

$db=mysqli_select_db($con,"dms");
$query1="SELECT * FROM enroll WHERE regno='$p'";
$result1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($result1);
$dt=$row1[1];

$query="SELECT * FROM student WHERE regno='$p'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$na=$row[1];
$br=$row[6];
$em=$row[3];




}
else
{ 
header("location:formstudent.php");
}

?>

<html><head>
</head><body>
<br><br>
<H1><font color="green" size="10"><center><font face="Times New Roman">WELCOME!</font></center></font></H1></br>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" align="left">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

			
            <div class="container" > 
                  <div class="row" >
                      <div class="panel panel-success">
                      <div class="panel-heading" >  <h4 >Your Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img bgcolor="green" alt="User Pic" src="webD\user.png" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><font face="Times New Roman"><?php echo"$na";?></face></h2>
                            <p>   <b><font face="Times New Roman"> Student</face></b></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><b> Registration number :</b> <?php echo"$p";?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:20px;"></span><?php echo"$em";?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " ><b>Date Of Enrollment: </b><?php echo"$dt";?></div>
                      </div>
                </div>
            </div>
            </div>
			
			<form method="POST" action="newwelstud.php"><br>

<button type="submit" formaction="http://localhost:8012/dms/showstudent.php" class="btn btn-success"><font size="5">Check your Attendance</font></button>

</form>

<form method="POST" action="logoutstudent.php">
<button type="submit" class="btn btn-success">Logout</button></form>
</body>

</html>

