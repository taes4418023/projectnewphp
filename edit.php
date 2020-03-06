<html>

<head>
    <title> PHP & MySQL (mysqli)</title>
</head>

<body>
    <?php
    session_start();
 //include("connect.php");
 //ini_set('display_errors', 1);
 //error_reporting(~0);
 $serName = "localhost";
 $userName = "root";
 $userPassword = "";
 $dbName = "mydatabase";
 $strUserID = null;
 
 


 if(isset($_GET["UserID"]))
 {
 $strUserID = $_GET["UserID"];
 }

 //$serName = "localhost";
 //$userName = "root";
 //$userPassword = "";
 //$dbName = "mydatabase";
 
 $conn = mysqli_connect($serName,$userName,$userPassword,$dbName);
 $sql = "SELECT * FROM member  WHERE UserID = '{$_SESSION["UserID"]}' ";
 //$sql = "SELECT * FROM member WHERE UserID = '".$strUserID."' ";
 $query = mysqli_query($conn ,$sql);
 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
    
    
    <form action="save_edit.php" name="frmAdd" method="post">
        <table width="284" border="1">
            <tr>
                <th width="120">UserID</th>
                <td width="238"><input type="hidden" name="txtUserID" value="<?php echo $result["UserID"];?>"><?php echo
$result["UserID"];?></td>
            </tr>
            <tr>
                <th width="120">Name</th>
                <td><input type="text" name="txtUsername" size="20" value="<?php echo $result["Username"];?>"></td>
            </tr>
            <tr>
                <th width="120">Password</th>
                <td><input type="text" name="txtPassword" size="20" value="<?php echo $result["Password"];?>"></td>
            </tr>
            <tr>
                <th width="120">Username</th>
                <td><input type="text" name="txtName" size="2" value="<?php echo $result["Name"];?>"></td>
            </tr>
            <tr>
                <th width="120">Status</th>
                <td><input type="text" name="txtStatus" size="5" value="<?php echo $result["Status"];?>"></td>
            </tr>
           
        </table>
        <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
//mysqli_close($conn);
?>
</body>
<a href="admin_page2.php">กลับไปหน้าหลัก 🛠</a><br>
</html>