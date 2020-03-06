<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
session_start();
include("connect.php");

//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");

$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "UPDATE member SET ";
$strSQL .="UserID = '".$_POST["txtUserID"]."' ";
$strSQL .=",Username = '".$_POST["txtUsername"]."' ";
$strSQL .=",Password = '".$_POST["txtPassword"]."' ";
$strSQL .=",Name = '".$_POST["txtName"]."' ";
$strSQL .=",Status = '".$_POST["txtStatus"]."' ";
//$strSQL .=",Used = '".$_POST["txtUsed"]."' ";
$strSQL .="WHERE UserID = '{$_SESSION["UserID"]}' ";;
$objQuery = mysqli_query($conn, $strSQL);

if($objQuery){
   
	echo "<script type='text/javascript'>";
	echo  "alert('แก้ไขข้อมูลเรียบร้อย');";
	echo "window.location='edit.php';";
	echo "</script>";
 }
 else{
	echo "<script type='text/javascript'>";
		echo "window.location='edit.php';";
	echo "</script>";
 }
//if($objQuery)
//{
	echo "Save Done.";
//}
//else
//{
	//echo "Error Save [".$strSQL."]";
//}
mysqli_close($conn);
?>
</body>
</html>

