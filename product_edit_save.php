<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
include("connect.php");
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");

$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "UPDATE product SET ";
$strSQL .="p_id = '".$_POST["txtCustomerID"]."' ";
$strSQL .=",p_name = '".$_POST["txtName"]."' ";
$strSQL .=",p_price = '".$_POST["txtEmail"]."' ";
$strSQL .=",p_detail = '".$_POST["txtdetail"]."' ";
//$strSQL .=",Budget = '".$_POST["txtBudget"]."' ";
//$strSQL .=",Used = '".$_POST["txtUsed"]."' ";
$strSQL .="WHERE p_id = '".$_GET["CusID"]."' ";
$objQuery = mysqli_query($conn, $strSQL);

if($objQuery){
   
	echo "<script type='text/javascript'>";
	echo  "alert('แก้ไขข้อมูลเรียบร้อย');";
	echo "window.location='product_edit_List.php';";
	echo "</script>";
 }
 else{
	echo "<script type='text/javascript'>";
		echo "window.location='product_edit_List.php';";
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

