<?php
session_start();


$p=$_POST['x'];
$q=$_POST['y'];
$r=$_POST['z'];

if($p=="" || $q=="" || $r=="")
{echo"FILL ALL";
echo"<a href='formfaculty.php'>Click here to go back";
}

else
{
$username = "root";
$pass = "";
$host = "localhost";
$db_name = "dms";
$con = mysqli_connect ($host, $username, $pass);
$db = mysqli_select_db ( $con, $db_name );
$query1="SELECT * FROM faculty WHERE name='$p' && password='$q' && courseID='$r'";
$result=mysqli_query($con,$query1);
$abc=mysqli_num_rows($result);
if($abc==0)
{echo"MISMATCH";
echo"<a href='formfaculty.php'>Click here to go back";}
else
{$_SESSION['courseID']=$r;
header("location:welcomefaculty.php");


}

}



?>