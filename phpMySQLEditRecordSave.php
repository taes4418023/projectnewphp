<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
include("connect.php");
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "UPDATE member SET ";
$strSQL .="UserID = '".$_POST["txtCustomerID"]."' ";
$strSQL .=",Username = '".$_POST["txtName"]."' ";
$strSQL .=",Name = '".$_POST["txtEmail"]."' ";
$strSQL .=",Status = '".$_POST["txtCountryCode"]."' ";
//$strSQL .=",Budget = '".$_POST["txtBudget"]."' ";
//$strSQL .=",Used = '".$_POST["txtUsed"]."' ";
$strSQL .="WHERE UserID = '".$_GET["CusID"]."' ";
$objQuery = mysqli_query($conn, $strSQL);

if($objQuery){
   
	echo "<script type='text/javascript'>";
	echo  "alert('แก้ไขข้อมูลเรียบร้อย');";
	echo "window.location='phpMySQLEditRecordList.php';";
	echo "</script>";
 }
 else{
	echo "<script type='text/javascript'>";
		echo "window.location='phpMySQLEditRecordList.php';";
	echo "</script>";
 }
//if($objQuery)
//{
	//echo "Save Done.";
//}
//else
//{
	//echo "Error Save [".$strSQL."]";
//}
mysqli_close($conn);
?>
</body>
</html>

