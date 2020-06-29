<?php
$con = mysqli_connect("localhost","root","","dgls");
$sql = "SHOW TABLES";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_row($result)) {
	echo "Table: {$row[0]}\n";
}
mysqli_free_result($result);
?>