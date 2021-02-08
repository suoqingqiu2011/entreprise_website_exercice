<?
$con = mysql_connect('localhost', "root","systatest");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("test", $con);

?>


<html>
<head>
<script src="selectuser.js"></script>
</head>
<body>

<form> 
Select a User:
<select name="users" onchange="showUser(this.value)">
<option value="0">ALL</option>
<option value="1">Peter Griffin</option>
<option value="2">Lois Griffin</option>
<option value="3">Glenn Quagmire</option>
<option value="4">Joseph Swanson</option>
</select>
</form>

<p>
<div id="txtHint" >
	<table border='1'>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Age</th>
		<th>Hometown</th>
		<th>Job</th>
		</tr>
		
		<?
		$sql="SELECT * FROM user" ;

		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result))
		 {
		?>
		<tr>
		<td><? echo $row['FirstName'];?></td>
		<td><? echo $row['LastName'];?></td>
		<td><? echo $row['Age'];?></td>
		<td><? echo $row['Hometown'];?></td>
		<td><? echo $row['Job'];?></td>
		</tr>
		 <? } ?>
		

	</table>

</div>
</p>

</body>
</html>