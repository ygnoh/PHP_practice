<?php
	$result=mysql_query("select * from member");
	while($row = mysql_fetch_array($result)) {
		echo "<h1>".$row['mem_email']."</h1>";
	}
?>
