<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Order List</title>

</head>

<body>
    <center>
        <h1> รายการลูกค้าที่เข้ามาสั่งซื้อ!</h1>
    </center> <br>
    <table width="800" border="1" align="center" bordercolor="#666666">
        <tr>
            <td width="200" align="center" bgcolor="#CCCCCC"><strong>ID</strong></td>
            <td width="200" align="center" bgcolor="#CCCCCC"><strong>เวลาการสั่งซื้อ</strong></td>
            <td width="300" align="center" bgcolor="#CCCCCC"><strong>ชื่อ-สกุล</strong></td>
            <td width="100" align="center" bgcolor="#CCCCCC"><strong>ที่อยู่</strong></td>
            <td width="100" align="center" bgcolor="#CCCCCC"><strong>Email</strong></td>
            <td width="300" align="center" bgcolor="#CCCCCC"><strong>โทรศัพท์</strong></td>
            <td width="300" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
            <td width="100" align="center" bgcolor="#CCCCCC"><strong>ราคารวม</strong></td>
        </tr>




        <?php
        //connect db
        include("connect.php");
        $sql = "select * from order_head";  //เรียกข้อมูลมาแสดงทั้งหมด
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='left'>" . $row["o_id"] . "</td>";
            echo "<td align='left'>" . $row["o_dttm"] . "</td>";
            echo "<td align='left'>" . $row["o_name"] . "</td>";
            echo "<td align='left'>" . $row["o_addr"] . "</td>";
            echo "<td align='left'>" . $row["o_email"] . "</td>";
            echo "<td align='left'>" . $row["o_phone"] . "</td>";
            echo "<td align='left'>" . $row["o_qty"] . "</td>";
            echo "<td align='left'>" . $row["o_total"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <center><a href="product.php">กลับไปยังหน้ารายการสินค้า</a></center>