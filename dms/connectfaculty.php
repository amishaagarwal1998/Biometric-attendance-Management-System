<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];



if($m=="" || $n=="" || $o=="")
{
echo"FILL ALL";
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


$query1="SELECT * FROM faculty WHERE courseID='$p'";
$result=mysqli_query($con,$query1);
$abc=mysqli_num_rows($result);
if($abc==0)
{
$query="INSERT INTO faculty(name,password,course,courseID) VALUES('$m','$n','$o','$p')";
mysqli_query($con,$query);
echo"DONE";
echo"<a href='formfaculty.php'>Click here to go back";

}
else
{echo"already exists";}

}


?>