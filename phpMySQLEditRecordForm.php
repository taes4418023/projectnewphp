<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="phpMySQLEditRecordSave.php?CusID=<?php echo $_GET["CusID"];?>" name="frmEdit" method="post">
<?php
include("connect.php");
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysqli_select_db($conn, "mydatabase");
$strSQL = "SELECT * FROM member WHERE UserID = '".$_GET["CusID"]."' ";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
	echo "Not found UserID=".$_GET["CusID"];
}
else
{
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">UserID </div></th>
    <th width="98"> <div align="center">username </div></th>
    <th width="198"> <div align="center">Name </div></th>
    <th width="97"> <div align="center">Status </div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="txtCustomerID" size="5" value="<?php echo $objResult["UserID"];?>"></div></td>
    <td><input type="text" name="txtName" size="20" value="<?php echo $objResult["Username"];?>"></td>
    <td><input type="text" name="txtEmail" size="20" value="<?php echo $objResult["Name"];?>"></td>
    <td><div align="center"><input type="text" name="txtCountryCode" size="2" value="<?php echo $objResult["Status"];?>"></div></td>
    
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