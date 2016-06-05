<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
include "db_info.php";
$result=mysql_query("select * from mysql.temp");
?>
<?php
while($row = mysql_fetch_array($result)) {
	echo "<h1>".$row['name']."</h1>";
}
?>
</body>
</html>
