<?php
	include("connect.php");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
    }	
    

$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."'";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_all($objQuery,MYSQLI_ASSOC);



	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	

        $strSQL = "INSERT INTO member (Username,Password,Name,Status) VALUES 
        (
            '{$_POST["txtUsername"]}',
            '{$_POST["txtPassword"]}',
            '{$_POST["txtName"]}',
            '{$_POST["SelectStatus"]}'
		)";
		
        $objQuery = mysqli_query($conn,$strSQL);


		
		echo "Register Completed!<br>";		
	
        echo "<br> Go to <a href='index.html'>Login page</a>";
    }

    //mysqli_close();
?>