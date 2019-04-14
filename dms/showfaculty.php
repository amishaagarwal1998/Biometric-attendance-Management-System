
<html>
<br>
<head><H1><font color="black" size="30" align="center"><u><center>ATTENDANCE &nbsp; TABLE</center></u></font></H1></head>
<body background="webD\done.jpg">
 
</body>
</html>

<?php

session_start();
if(isset($_SESSION['courseID']))
{$r=$_SESSION['courseID'];
$username = "root";
$pass = "";
$host = "localhost";
$db_name = "dms";
$con = mysqli_connect ($host, $username, $pass);
$db = mysqli_select_db ( $con, $db_name );
$query="SELECT * FROM attendance WHERE courseID='$r' ";
$result=mysqli_query($con,$query);
echo"<font size='20' color='white'>$r</font>";
echo"<font size='15' face='sans-serif' color='white'>";
echo"<br><table border='5' align='center'  cellspacing='5'  cellpadding='10' height='40'>";

echo"<tr>";


echo"<td width='15%'>Attendance number</td>";
echo"<td width='15%'>Registration number</td>";
echo"<td width='15%'>Name</td>";
echo"<td width='15%'>Total present</td>";

echo"</tr>";

while($row=mysqli_fetch_array($result))
{

echo"<tr>";
echo"<td width='15%'>".$row[0]."</td>";

echo"<td width='15%'>".$row[1]."</td>";
echo"<td width='15%'>".$row[2]."</td>";
echo"<td width='15%'>".$row[4]."</td>";
echo"</tr>";

}
echo"</table>";
echo"</font>";
}

else
{header("location:formfaculty.php");}

?>

<html>
<body><center>
<br><br>
<a href="welcomefaculty.php">CLICK HERE TO GO BACK</a>
</center></body></html>
