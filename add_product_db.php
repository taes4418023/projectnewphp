<meta charset="UTF-8" />
<?php 
require_once('connect.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	$p_name = $_POST['p_name'];
	$p_detail = $_POST['p_detail'];
	$p_price = $_POST['p_price'];
	$p_pic = (isset($_POST['p_pic']) ? $_POST['p_pic'] : '');
	$c_id = $_POST['c_id'];
		
	$upload=$_FILES['p_pic'];
	if($upload <> '') { 

	//โฟลเดอร์ที่เก็บไฟล์
	$path="img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['p_pic']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;

	$path_copy=$path.$newname;
	$path_link="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_pic']['tmp_name'],$path_copy);  
		
	
	}


			 $sql = "INSERT INTO product 
					(p_name, 
					p_detail, 
					p_price, 
					p_pic,
					c_id) 
					VALUES
					('$p_name',
					'$p_detail',
					'$p_price',
					'$newname',
					'$c_id')";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
        
	//mysql_close();



	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มสินค้าเรียบร้อย');";
			echo "window.location='add_product2.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
				echo "window.location='add_product2.php';";
			echo "</script>";
	  }
	
	
 ?>