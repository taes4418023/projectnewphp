<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Product List</title>

</head>

<body>
    <table width="600" border="1" align="center" bordercolor="#666666">
        <tr>
            <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
            <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อรุ่น</strong></td>
            <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
            <td width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></td>
        </tr>
        

        

        <?php
        //connect db
        include("connect.php");
        $sql = "select * from product order by p_id";  //เรียกข้อมูลมาแสดงทั้งหมด
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'><img src='/admin/img/" . $row["p_pic"] . " ' width='80'></td>";
            echo "<td align='left'>" . $row["p_name"] . "</td>";
            echo "<td align='center'>" . number_format($row["p_price"], 2) . "</td>";
            echo "<td align='center'><a href='product_detail.php?p_id=$row[p_id]'>คลิก</a></td>";
            echo "</tr>";
            
        }
        ?>
    </table>

   


    
     <center><a href="getData.php">เเสดงข้อมูลสมาชิก</a></center>
    <center><a href="login.php">ออกจากระบบ</a></center>
    <center><a href="user_page2.php">กลับไปหน้าหลัก</a></center>
   