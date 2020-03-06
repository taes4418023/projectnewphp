<?php 
    ini_set("display_errors", 1);
    error_reporting(0);

    $serName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "mydatabase";

    $objQuery = mysqli_query($con,$strSQL);
    $conn = mysqli_connect($serName, $userName, $userPassword, $dbName);
    if(mysqli_connect_errno()){
        echo"Database Connect Failed: ". mysqli_connect_error();
    }else{
      //  echo"Database Connected...";
    }
   // mysqli_close($conn);

?>