<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
$q=$_POST['e'];

if($m=="" || $n=="" || $o=="" || $p=="" || $q=="")
{
echo"FILL ALL";
echo"<a href='formstudent.php'>Click here to go back";
}
else
{
$username = "root";
$pass = "";
$host = "localhost";
$db_name = "dms";
$con = mysqli_connect ($host, $username, $pass);
$db = mysqli_select_db ( $con, $db_name );
$query1="SELECT * FROM student WHERE regno='$n'";
$result=mysqli_query($con,$query1);
$coq=mysqli_num_rows($result);
if($coq==0)
{
$query="INSERT INTO student(name,regno,email,courseID,password) VALUES('$m','$n','$o','$p','$q')";
mysqli_query($con,$query);



$q1="INSERT INTO attendance(attendance_number,name,regno,courseID) 
		SELECT attendance_number,name,regno,courseID
		FROM enroll
		WHERE NOT EXISTS (SELECT * FROM attendance 
						  WHERE (attendance.attendance_number = enroll.attendance_number)
							)";
mysqli_query($con,$q1);

echo"DONE";
echo"<a href='formstudent.php'>Click here to login";

}
else
{echo"already exists";}

}


?>