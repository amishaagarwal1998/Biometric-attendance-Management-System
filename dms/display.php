<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url"); // Refresh the webpage every 5 seconds
?>
<html>
<head>
<title>Arduino Ethernet Database</title>
<style type="text/css">
.table_titles {
padding-right: 20px;
padding-left: 20px;
color: #000;
}
.table_titles {
color: #FFF;
background-color: #0000FF;
}
table {
border: 2px solid #333;
}
body { font-family: "Trebuchet MS", Courier; }
</style>
</head>
<body>
<h1>Arduino Data Logging to Database</h1>
<table border="0" cellspacing="0" cellpadding="4">
<tr>
<td class="table_titles">S.No.</td>
<td class="table_titles">Date and Time</td>
<td class="table_titles">attendance_number</td>

</tr>
<?php
$i;
include('connection.php');
$result = mysqli_query($con,'SELECT * FROM data');
if($result == FALSE) { 
    die(mysqli_error($con)); // TODO: better error handling
}

// Process every record
$oddrow = true;
while($row = mysqli_fetch_array($result))
{$pres=0;


if ($oddrow)
{
$css_class=' class="table_cells_odd"';
}
else
{
$css_class=' class="table_cells_even"';
}
$oddrow = !$oddrow;
for($i=1;$i<256;$i++)
{
$cnt="SELECT count(attendance_number) from data WHERE attendance_number='$i'";
//$res1=(string)mysqli_query($con,$cnt);
$res1=mysqli_query($con,$cnt);

//echo"<pre>";
//print_r($res1);

//print_r($res1->num_rows);
//echo"</pre>";



while($row2 = mysqli_fetch_array($res1))
{
	//echo"<pre>";
	//print_r($row2[0]);
	//print_r($row2['count(attendance_number)']);
	//echo"</pre>";
	
	//$attenddd = $row2['count(attendance_number)'];
		$attenddd = $row2[0];






$que1="UPDATE attendance SET totalp='$attenddd' WHERE attendance_number=$i ";
$res=mysqli_query($con,$que1);

}
}

echo "<tr>";
echo "<td '.$css_class.'>" . $row['S.No'] . "</td>";
echo "<td '.$css_class.'>" . $row['event'] . "</td>";
echo "<td '.$css_class.'>" . $row['attendance_number'] . "</td>";
	


//$res=mysqli_query($con,$que1);
echo "</tr>"; 
}

// Close the connection
mysqli_close($con);
?>
</table>
</body>
</html>