<?php
include ('connection.php');
//echo $_SERVER['SERVER_ADDR'] ;
$abc=$_GET['attendance_number'];
$pqr=string sha1($abc,$getRawOutput);
$sql_insert = "INSERT INTO data (attendance_number) VALUES ('$pqr')";

if(mysqli_query($con,$sql_insert))
{
echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>