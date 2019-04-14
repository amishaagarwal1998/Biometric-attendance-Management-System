

<html>
<br>
<head><H1><font color="black" size="30" align="center" face="Times New Roman"><u><center>ATTENDANCE &nbsp; TABLE</center></u></font></H1></head>
<body  background="webD/background.jpg">


</body>
</html>
<?php

session_start();
if(isset($_SESSION['regno']))
{$p=$_SESSION['regno'];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"dms");
$query="SELECT * FROM attendance WHERE regno='$p'";
$result=mysqli_query($con,$query);





echo"<font size='15' face='Times New Roman' colour='white'>";
echo"<br><table border='5' align='center'  cellspacing='5' cellpadding='10' height='40'>";

echo"<tr>";


echo"<td width='15%'>NAME</td>";
echo"<td width='15%'>COURSE-ID</td>";
echo"<td width='15%'>TOTAL ATTENDANCE</td>";

echo"</tr>";
$tot;



while($row=mysqli_fetch_array($result))
{

echo"<tr>";


echo"<td width='15%'>".$row[2]."</td>";
echo"<td width='15%'>".$row[3]."</td>";
echo"<td width='15%'>".$row[4]."</td>";





}
echo"</table>";

}

else
{header("location:formstudent.php");}

?>
<html>
<body><center><br><br><br>
<a href="newwelstud.php" color="green">
<font color="black" size="5"><u>CLICK HERE TO GO BACK</u></font></a>
</center></body></html>

