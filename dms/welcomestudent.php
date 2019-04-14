<?php

session_start();
if(isset($_SESSION['regno']))
{
$p= $_SESSION['regno'];
echo"YOU HAVE SUCCESSFULLY LOGGED IN ";
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"dms");
$query="SELECT * FROM student WHERE regno='$p'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$na=$row[1];
$br=$row[6];

}
else
{ 
header("location:formstudent.php");
}

?>

<html>
<body background="webD\dpmv.jpg">
<form method="POST" action="welcomestudent.php"><br>

<button type="submit" formaction="http://localhost:8012/dms/showstudent.php"><font size="5">Check your Attendance</font></button>

<H1><font color="black" size="40" align="center"><center>WELCOME!</center></font></H1></br>
</body>

</form>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" id="banner" href="id2.css" type="text/css" media="all">
</head>
<body>
 <div id="banner">
  <div id="cloud-scroll"></div>
<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Logout</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure you want to logout?</h4>
        </div>
        <div class="modal-body">
          <p>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      
		<button type="button"  class="btn btn-default" data-dismiss="modal" formaction="http://localhost:8012/dms/welcomestudent.php">Yes</button>
          
		</p>
        </div>
        
		
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>

<?php
echo"<head><H1><font size='6' color='black'>
<div style='text-align: center;'>
    <div style='display: inline-block; text-align: left;'>
         $na<br />
        Registration no : $p<br />
        Branch : $br<br />
        
    </div></div></font></H1></head>
";
echo" <a href='logoutstudent.php'>LOGOUT";
/*
$varGender = $_POST['formGender'];

if($varGender=="M")
{echo"<a href='showstudent.php'>Click here";
}
else if($varGender=="P")
{
echo"<a href='showstudent.php'>Click here";
}
else if($varGender=="C")
{
echo"<a href='showstudent.php'>Click here";}
else if($varGender=="N")
{
echo"<a href='showstudent.php'>Click here";
}
*/
?>