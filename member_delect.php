<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	//$serverName = "localhost";
	//$userName = "root";
	//$userPassword = "root";
	//$dbName = "mydatabase";

	//$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	include("connect.php");

	$strCustomerID = $_GET["UserID"];
	$sql = "DELETE FROM member
			WHERE UserID = '".$strCustomerID."' ";

    $query = mysqli_query($conn,$sql);
    
    if($query){
   
		echo "<script type='text/javascript'>";
		echo  "alert('ลบสมาชิกเรียบร้อย');";
		echo "window.location='phpMySQLEditRecordList.php';";
		echo "</script>";
	 }
	 else{
		echo "<script type='text/javascript'>";
			echo "window.location='phpMySQLEditRecordList.php';";
		echo "</script>";
	 }

	//if(mysqli_affected_rows($conn)) {
		 //echo "Record delete successfully";
	//}

	mysqli_close($conn);
?>
</body>
</html>