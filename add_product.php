<?php session_start(); ?>
<?php
header('Content-Type: text/html; charset=utf-8');
  // Create database connection
  $db = mysqli_connect("localhost", "root", "123456789", "e-commerce");
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['Submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
	$name = $_POST['name'];
	$des = $_POST['des'];
	$type = $_POST['type'];
	$color = $_POST['color'];

	
	
	switch ($type) {
		case 1:
			$p = polo;
			break;
		case 2:
			$p = apron;
			break;
		case 3:
			$p = hat;
			break;
		case 4:
			$p = pants;
			break;	
		case 5:
			$p = sport;
			break;
		case 6:
			$p = suits;
			break;
		case 7:
			$p = tshirt;
			break;
		case 8:
			$p = umbrella;
			break;
		case 9:
			$p = jacket;
			break;		
		
		default:
			exit;
	}

	

  	$target = "productimg/".basename($image);
  	$sql = "INSERT INTO $p (Img, Name , Description ,Color ) VALUES 
				('$image','$name','$des','$color')";
  	mysqli_query($db, $sql);
$target = "productimg/".basename($image);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	  
	  echo "<script>alert('เพิ่มข้อมูลสินค้าเสร็จสิ้น');window.location.href='product_admin.php';</script>";
	
  }

?>

<!DOCTYPE html>
<html ><head>
  	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>เพิ่มข้อมูลสินค้า</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <script>
        window.onload = function(){
            $.get("nav.php", function(data){
                $("#navigation").html(data);
            })
        }
    </script>
  <style type="text/css">

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }
  </style>
  
  
    <title>เพิ่มข้อมูลสินค้า</title>
   

  <script>
        window.onload = function(){
            $.get("nav.php", function(data){
                $("#navigation").html(data);
            })
        }
    </script>
	<div id="navigation"></div>
	<style>
		tr{
			vertical-align: text-top;
			position: relative;
		}
		
	</style>
	<script>
	function validate(file){
			var ext = file.substr(file.lastIndexOf('.')+1);
			var allow= ["jpg","jpeg","png","PNG"]; 
			var name= file.split(/(\\|\/)/g).pop();
			if(allow.lastIndexOf(ext)==-1){
				$(".Warn").html("ไฟล์นามสกุล jpg jpeg png เท่านั้น");
				document.getElementById("Warn").style.color = "red";
				return false;
			}else{
				$(".Warn").html("");
				return true;
			}
		
	}
</script>
  </head>   
  <body>
  <?php include_once('header.php'); ?>
  

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
					<strong>ระบบเพิ่มสินค้า</strong>
                </h1>

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox optio-->
          </div>
        </div>
		</div>
	
	<br><br><br><br>
	
	  
	  
	  
	  <center>
	<div style="width: 70%;">
		<form class="border border-light p-5" name="traineradd" method="post" action="add_product.php" enctype="multipart/form-data"  onSubmit="return validate();">
			<p for="textInput"  align = 'left'>ชื่อสินค้า</p>
			<input class="form-control mb-4" type="text" name="name" placeholder="ชื่อสินค้า"  required />

			<p for="textInput"  align = 'left'>คำอธิบาย</p>
			<textarea class="form-control mb-4" placeholder="คำอธิบาย" name="des" cols="40" rows="5" required></textarea>

			<p for="textInput"  align = 'left'>หมวดหมู่สินค้า</p>
			<select class="browser-default custom-select mb-4" name="type" required>
				<option selected value="" >เลือกประเภทสินค้า</option>
				<option value="1">เสื้อโปโล</option>
				<option value="2">ผ้ากันเปื้อน</option>
				<option value="3">หมวก</option>
				<option value="4">กางเกง</option>
				<option value="5">ชุดกีฬา</option>
				<option value="6">ชุดสูท</option>
				<option value="7">เสื้อยืด</option>
				<option value="8">ร่ม</option>
				<option value="9">เสิ้อแจ็คเก็ต</option>
			</select>


			<p for="textInput"  align = 'left'>สี</p>
			<select class="browser-default custom-select mb-4" name="color" required>
				<option selected value="" >เลือกสีสินค้า</option>
				<option value="สีดำ">สีดำ</option>
				<option value="สีขาว">สีขาว</option>
				<option value="สีเทา">สีเทา</option>
				<option value="สีแดง">สีแดง</option>
				<option value="สีฟ้า">สีฟ้า</option>
				<option value="สีเหลือง">สีเหลือง</option>
				<option value="สีเขียว">สีเขียว</option>
				<option value="สีน้ำตาล">สีน้ำตาล</option>
				<option value="สีชมพู">สีชมพู</option>
				<option value="สีม่วง">สีม่วง</option>
			</select>

		
			<p for="textInput"  align = 'left'>รูปภาพ</p>
						<div class="custom-file">
						
							  <input type="file" class="custom-file-input" id="customFile" name="image" onChange="return validate(this.value)">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div><br>
								<p id="Warn" class="Warn"></p>
					
					
			<input class="btn btn-info btn-block" type="submit" name="Submit" value="Submit" />
			
			<input type=”button” style="width:140px;" name=”button” class="btn btn-info btn-block" value="Cancel"  onclick="window.location='product_admin.php'"/>
			
		</form>
	</div>
				</div>
 </center>
 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
 </body>
</html>