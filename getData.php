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

    

    $strSQL = "SELECT * FROM member";
    $objQuery = mysqli_query($con, $strSQL);
    

    ?>
    <form action="save_edit.php" name="frmAdd" method="post">
    <table width="600" border="1">
    <center>
        <h1> แสดงข้อมูล User ทั้งหมด!</h1>
    </center> <br>
        <tr>
            <th width="91">
                <div align="center">UserID </div>
            </th>
            <th width="98">
                <div align="center">Username </div>
            </th>
            <th width="198">
                <div align="center">Password </div>
            </th>
            <th width="97">
                <div align="center">Name </div>
            </th>
            <th width="97">
                <div align="center">Status </div>
            </th>
           
         
            </th>
        </tr>
           
        </tr>
        <?php
        while ($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $objResult["UserID"]; ?></div></td>
                <td><?php echo $objResult["Username"]; ?></td>
                <td><?php echo $objResult["Password"]; ?></td>
                <td><?php echo $objResult["Name"]; ?></td>
                <td><?php echo $objResult["Status"]; ?></td>
                
                
                
            </tr>
        <?php
        }
        ?>
    </table>
    <!--<input type="submit" name="submit" value="submit">-->
    </form>

   <?php
    //mysql_close($objConnect);
    ?>
</body>
<a href="user_page2.php">กลับไปหน้าหลัก 🛠</a><br>
</html>