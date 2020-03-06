<?php
	session_start();
	include("connect.php");


$strSQL = "SELECT * FROM member WHERE Username = '{$_POST['txtUsername']}' LIMIT 1 ";
$objQuery = mysqli_query($conn,$strSQL);
//$objResult =mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if(!mysqli_num_rows($objQuery))
{
	echo "Username and Password Incorrect!";
	
}
else
{
	$objResult = mysqli_fetch_assoc($objQuery);
			$_SESSION["UserID"] = $objResult["UserID"]; 
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN") //เช็คว่าถ้าสเตตัสเป็นAdminให้ลิ้งไปหน้าเเอดมิน
			{
				header("location:admin_page2.php");
			}
			else
			{
				header("location:user_page2.php");
			}
	}
	//mysqli_close();
