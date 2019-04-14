<?php
session_start();

$p=$_POST['x'];
$q=$_POST['y'];

if($p=="" || $q=="")
{echo"FILL ALL";
echo"<a href='formstudent.php'>Click here to go back";
}

else
{$abc=mysqli_connect("localhost","root","");
mysqli_select_db($abc,"dms");
$query1="SELECT * FROM student WHERE regno='$p' && password='$q'";
$result=mysqli_query($abc,$query1);
$pqr=mysqli_num_rows($result);


if($pqr==0)
{echo"MISMATCH";
echo"<a href='formstudent.php'>  Click here to go back";
}
else
{$_SESSION['regno']=$p;
header("location:newwelstud.php");
}

}



?>