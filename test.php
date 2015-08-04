<meta chatset="UTF-8">

<?php 
	ini_set('display_errors', 'on');

	$hostname = "localhost";
	$username = "root";
	$password = "123456";
	$db = "test";

	$conn = mysqli_connect($hostname,$username,$password);

	if ($conn){ echo "Connect Host" ;} else { echo "No Connect Host"; }

	echo "<br>";

	$conndb = mysqli_select_db($conn,$db);

	if ($conndb){ echo "Connect Database" ;} else { echo "No Connect Database"; }







?>