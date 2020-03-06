<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="product_edit_save.php?CusID=<?php echo $_GET["CusID"];?>" name="frmEdit" method="post">
<?php
include("connect.php");
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "SELECT * FROM product WHERE p_id = '".$_GET["CusID"]."' ";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
	echo "Not found p_id=".$_GET["CusID"];
}
else
{
?>
<table width="600" border="1">
  <tr>
    <th width="97"> <div align="center">ภาพ </div></th>
    <th width="91"> <div align="center">ProductID </div></th>
    <th width="91"> <div align="center">ชื่อรุ่น </div></th>
    <th width="98"> <div align="center">ราคา </div></th>
    <th width="198"> <div align="center">รายละเอียดสินค้า </div></th>
  </tr>
  <tr>
    <td><div align='center'><img src='/home/" . $row["p_pic"] . " ' width='80'></div></td>
    <td><div align="center"><input type="text" name="txtCustomerID" size="5" value="<?php echo $objResult["p_id"];?>"></div></td>
    <td><input type="text" name="txtName" size="20" value="<?php echo $objResult["p_name"];?>"></td>
    <td><input type="text" name="txtEmail" size="20" value="<?php echo $objResult["p_price"];?>"></td>
    <td><input type="text" name="txtdetail" size="20" value="<?php echo $objResult["p_detail"];?>"></td>
    
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  <?php
  }
  mysqli_close($conn);
  ?>
  </form>
</body>
</html>