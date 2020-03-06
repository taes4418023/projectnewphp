<?php
session_start();
require_once("connect.php");

if (!isset($_SESSION['UserID'])) {
    echo "Please Login!";
    echo ("<script LANGUAGE='JavaScript'> 
		window.location.href='index.html' ;
    </script>");
    exit();
}

//*** Update Last Stay in Login System
$sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '" . $_SESSION["UserID"] . "' ";
$query = mysqli_query($conn, $sql);

//*** Get User Login
$strSQL = "SELECT * FROM member WHERE UserID = '" . $_SESSION['UserID'] . "' ";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>
<html>

<head>
    <title>Admin Login SQL</title>
</head>

<body>
    <center>
        <h1> Welcome to Admin Page!</h1>
    </center> <br>
    <table border="1" style="width: 300px">
        <tbody>
            <tr>
                <td width="87"> &nbsp;Username</td>
                <td width="197"><?php echo $objResult["Username"]; ?>
                </td>
            </tr>
            <tr>
                <td> &nbsp;Name</td>
                <td><?php echo $objResult["Name"]; ?></td>
            </tr>

            <tr>
                <td> &nbsp;Status</td>
                <td><?php echo $objResult["Status"]; ?></td>
            </tr>
        </tbody>
    </table>


    <!--<div class="container">
        <div class="row">
            <div class="col">
                1 of 2
            </div>
            <div class="col">
                2 of 2
            </div>
        </div>
        <div class="row">
            <div class="col">
                1 of 3
            </div>
            <div class="col">
                2 of 3
            </div>
            <div class="col">
                3 of 3
            </div>
        </div>
    </div>-->
   
    <br>
    <a href="edit.php">แก้ไขข้อมูลลูกค้า 🛠</a><br>  
    <a href="product_edit_List.php">แก้ไขข้อมูลสินค้า 🛠</a><br>
    <a href="add_product2.php">เพิ่มสินค้า 🛠</a><br>
    <br>
    <button>
        <a href="index.html">ออกจากระบบ</a>
    </button>

    <button>
        <a href="phpMySQLEditRecordList.php">แสดงข้อมูล User ทั้งหมด</a>
    </button>
    <button>
        <a href="product_edit_List.php">แสดงข้อมูลสินค้าทั้งหมด</a>
    </button>
    
   

    <button>
        <a href="./view_order_admin.php">ใบเสร็จ</a>  <!--ดึงข้อมูลจากดาต้าเบสมาโชว์!>
    </button>
</body>

</html>