<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', "root","systatest");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("test", $con);

echo $q;
if($q== "0" ){
	$sql="SELECT * FROM user ";
}else{
	$sql="SELECT * FROM user WHERE id = '".$q."'";
}
$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['FirstName'] . "</td>";
 echo "<td>" . $row['LastName'] . "</td>";
 echo "<td>" . $row['Age'] . "</td>";
 echo "<td>" . $row['Hometown'] . "</td>";
 echo "<td>" . $row['Job'] . "</td>";
 echo "</tr>";
 }
echo "</table>";

mysql_close($con);
?>