<html>

<head>
    <title>ThaiCreate.Com</title>
</head>

<body>
    <?php
     $serName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "mydatabase";

    $con = mysqli_connect($serName, $userName, $userPassword, $dbName);

    

    $strSQL = "SELECT * FROM order_head";
    $objQuery = mysqli_query($con, $strSQL);
    

    ?>
    <form action="save_edit.php" name="frmAdd" method="post">
    <table width="600" border="1">
    <center>
        <h1> แสดงข้อมูลรายการสั่งซื้อทั้งหมดทั้งหมด!</h1>
    </center> <br>
        <tr>
            <th width="91">
                <div align="center">รหัสการสั่งซื้อ </div>
            </th>
            <th width="98">
                <div align="center">เวลาการสั่งซื้อ </div>
            </th>
            <th width="198">
                <div align="center">ชื่อ </div>
            </th>
            <th width="97">
                <div align="center">ที่อยู่ </div>
            </th>
            <th width="97">
                <div align="center">email </div>
            </th>
           
         
            </th>
        </tr>
           
        </tr>
        <?php
        while ($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $objResult["o_id"]; ?></div></td>
                <td><?php echo $objResult["o_dttm"]; ?></td>
                <td><?php echo $objResult["o_name"]; ?></td>
                <td><?php echo $objResult["o_addr"]; ?></td>
                <td><?php echo $objResult["o_email"]; ?></td>
                
                
                
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="submit" name="submit" value="submit">
    </form>

   <?php
    //mysql_close($objConnect);
    ?>
</body>

</html>