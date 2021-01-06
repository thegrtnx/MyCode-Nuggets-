<?php
include("../functions/init.php");

$Date = $_SESSION['date'];

//adding days to a previous date
echo date('Y-m-d', strtotime($Date. ' + 3 days'))."<br>";
echo date('Y-m-d', strtotime($Date. ' + 2 days'));
?>