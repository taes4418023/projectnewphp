<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
include("connect.php");
//$objConnect = mysqli_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "SELECT * FROM member";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">UserID </div></th>
    <th width="98"> <div align="center">username </div></th>
    <th width="198"> <div align="center">Name </div></th>
    <th width="97"> <div align="center">Status </div></th>
    <th width="59"> <div align="center">Edit </div></th>
    <th width="59"> <div align="center">ลบ </div></th>
  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["UserID"];?></div></td>
    <td><div align="center"><?php echo $objResult["Username"];?></div></td>
    <td><?php echo $objResult["Name"];?></td>
    <td><div align="center"><?php echo $objResult["Status"];?></div></td>
    
    <td align="center"><a href="phpMySQLEditRecordForm.php?CusID=<?php echo $objResult["UserID"];?>">Edit</a></td>
    <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='member_delect.php?UserID=<?php echo $objResult["UserID"];?>';}">Delete</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
<a href="admin_page2.php">กลับไปหน้าAdmin 🛠</a><br>
</html>