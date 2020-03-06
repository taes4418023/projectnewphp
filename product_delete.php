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

	$strCustomerID = $_GET["p_id"];
	$sql = "DELETE FROM product
			WHERE p_id = '".$strCustomerID."' ";

	$query = mysqli_query($conn,$sql);

	if($query){
   
		echo "<script type='text/javascript'>";
		echo  "alert('ลบสินค้าเรียบร้อย');";
		echo "window.location='product_edit_List.php';";
		echo "</script>";
	 }
	 else{
		echo "<script type='text/javascript'>";
			echo "window.location='product_edit_List.php';";
		echo "</script>";
	 }
	
	//if(mysqli_affected_rows($conn)) {
		 //echo "Record delete successfully";
	//}

	mysqli_close($conn);
?>
</body>
</html>


