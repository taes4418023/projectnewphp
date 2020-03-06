<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
include("connect.php");
//$objConnect = mysqli_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="97"> <div align="center">ภาพ </div></th>
    <th width="91"> <div align="center">ProductID </div></th>
    <th width="91"> <div align="center">ชื่อรุ่น </div></th>
    <th width="98"> <div align="center">ราคา </div></th>
    <th width="198"> <div align="center">รายละเอียดสินค้า </div></th>
    <th width="59"> <div align="center">Edit </div></th>
    <th width="59"> <div align="center">ลบ </div></th>
  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align='center'><img src="/admin/img/<?= $row['p_pic'];?> " width='80'></div></td>
    <td><div align="center"><?php echo $objResult["p_id"];?></div></td>
    <td><div align="center"><?php echo $objResult["p_name"];?></div></td>
    <td><div align="center"><?php echo $objResult["p_price"];?></div></td>
    <td><?php echo $objResult["p_detail"];?></td>
    
    
    <td align="center"><a href="product_edit_from.php?CusID=<?php echo $objResult["p_id"];?>">Edit</a></td>
    
    <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='product_delete.php?p_id=<?php echo $objResult["p_id"];?>';}">Delete</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="admin_page2.php">กลับไปหน้าAdmin 🛠</a><br>
</body>
</html>