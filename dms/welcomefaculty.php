<?php
session_start();
if(isset($_SESSION['courseID']))
{
$r= $_SESSION['courseID'];
$con=mysqli_connect("localhost","root","");

$db=mysqli_select_db($con,"dms");
$query1="SELECT * FROM faculty WHERE courseID='$r'";
$result1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($result1);
$na=$row1[0];
$cou=$row1[2];



}
else
{ 
header("location:formfaculty.php");
}
?>


<html>
<head><marquee><H1><u><br><font size="8" face="Times New Roman">Motilal Nehru National Institute of Technology</font></u></H1></marquee></head>
<body background="webD\tri.jpg">
<body bgcolor="pink"><br>

<div class="container" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" id="banner" href="id2.css" type="text/css" media="all">



<div class="container" > 
                <center>  <div class="row" >
                      <div class="panel panel-success"></center>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img bgcolor="green" alt="User Pic" src="webD\prof.jpg" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div><br><br><br>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" ><br>
                            <h1><font face="Times New Roman"><?php echo"$na";?></face></h1>
                            <p>   <b> <h1><font face="Times New Roman">Professor</font></h1></b></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" ><li><p><font face="Times New Roman"><h3><b>Course :</b> <?php echo"$cou";?></h3></font></p></li>
                            <li><p><font face="Times New Roman"><h3><b> Course ID :</b> <?php echo"$r";?></h3></font></p></li>
                          </ul>
                          <hr>
                            </div>
                </div>
            </div>
            </div>
				
			<form method="POST" action="welcomefaculty.php">
<center>
<button type="submit" formaction="http://localhost:8012/dms/showfaculty.php" class="btn btn-info"><font size="5" face="Times New Roman" >VIEW ATTENDANCE SHEET</font></button></center>

</form>

<form method="POST" action="logoutfaculty.php"><br>
<button type="submit" class="btn btn-info" ><h3><font face="Times New Roman">Logout</font></h3></button></form>
</body>
</div>
</div>
</html>
			
			
			
                           






