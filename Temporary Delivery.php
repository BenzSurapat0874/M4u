<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบออกบิลส่งของชั่วคราว</title>
	 <meta charset="utf-8">
	 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ระบบออกบิลส่งของชั่วคราว</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
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
</head>
<body><center>
    
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
                  <strong>ระบบออกบิลส่งของชั่วคราว</strong>
                </h1>

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
	</div
	
	<br><br><br><br>
	
	  <!----------------------------- Form ------------------------------>
	<form action="Teamporary Delivery Print.php" method="post">
		<table border="0" width="800px" align="center">
			<tr height="100">
				<td><img src="Top.png" width="800px" ></td>
			</tr>
			<tr>
				<td>
					<h5 style="color: #000138" align="center">บิลส่งของชั่วคราว (สำเนา)</h5>
			
				<!---------------ส่วนหัว--------------->
					<table border="1" width="800px">
						<tr align="center" height="150px">
							<td colspan="3"><h5>ชื่อลูกค้า</h5><b><input type="text" class="input-sm" name="Customer" value=" " size="50" placeholder="ชื่อลูกค้า"><br></b><br></td>
							<td><h5>วันที่</h5>20-09-2019</td>
						</tr>

					</table>
					<table border="1" width="800px"><br>
						<tr align="center" bgcolor="#49D6F2">
							<td width="60px"><b>ลำดับที่<br>Item</b></td>
							<td width="100px"><b>รายการ<br>Description</b></td>
							<td width="50px"><b>จำนวน<br>Quantity</b></td>
							<td width="50px"><b>ราคา/หน่วย<br>Price/ Unit</b></td>
						</tr>
						<!---------------ดึงค่ามาจากฟอร์ม--------------->
						<tr align="center" valign="top" height="300px">
							<td width="60px"><input type="text" class="input-sm" name="item1" size="2" value="1" ></td>
							<td width="100px"><textarea class="input-sm" rows="20" cols="50" name="description1" placeholder="รายการสินค้า"></textarea></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity1" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price1" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>
						
						
						<tr valign="middle" height="60px">
							<td colspan="3" style="color: crimson"><b> สินค้ารับไปแล้วเงินยังไม่ชำระ (Received in good not yet Palment) </b></td>
							<td></b></td>
						</tr>
					</table>
		
					<table border="1" width="800px"><br>
						<tr align="center" height="80px" >
							<td width="400px"valign="bottom"><b>ลงชื่อ(________________________________)ผู้รับสินค้า<br>วันที่ : <input type="date" class="input-sm" id="start" name="Duedate1"></b></td>
							<td width="400px"valign="bottom"><b>ลงชื่อ(________________________________)ผู้ส่งสินค้า<br>วันที่ : <input type="date" class="input-sm" id="start" name="Duedate2"></b></td>
						</tr>
						
					</table><br>
			<tr>
				<td colspan="8" align="center"><input type="submit" value="ตกลง" class="btn btn-info" size="10">
				<input type="reset" value="ยกเลิก" class="btn btn-info"><br><br></td>
			</tr>
		</center>
	</form>
		
		
		 <!-- JQuery -->
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
