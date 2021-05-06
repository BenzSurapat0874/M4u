<?php session_start(); ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ใบเสนอราคา</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
	  #dorp{
		  color: #FFFFFF;
	  }
      #center {
        align-items: center;
        width:60%;
}
  </style>
</head>

<body><center>
    <?php include_once('header.php'); ?>
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z"  data-ride="carousel">

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
                  <strong>ระบบออกใบเสนอราคา</strong>
                </h1>

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
	</div
	
	><br><br><br><br>
	
	  <!----------------------------- Form ------------------------------>
	<form action="admin-quotation-print.php" method="post">
		<table border="0" width="800px" align="center">
			<tr height="100">
				<td><img src="Top.png" width="800px" ></td>
			</tr>
			<tr>
				<td>
					<h5 style="color: #000138" align="center">ใบเสนอราคา (Quotation)</h5>
			
				<!---------------ส่วนหัว--------------->
					<table border="1" width="800px">
						<tr align="center">
							<td colspan="3"><h5>ชื่อลูกค้า</h5><b><input type="text" class="input-sm" name="Customer" value=" " size="50" placeholder="ชื่อลูกค้า"><br></b><br></td>
							<td><h5>วันที่</h5>20-09-2019</h5>
						</tr>
						<tr align="center" bgcolor="#6C95EC">
							<td><b>ผู้ดูแลลูกค้า<br>Customer Service Advisor</b></td>
							<td><b>เงื่อนไขการชำระเงิน<br>Term of payment</b></td>
							<td><b>วันถึงกำหนดจ่าย<br>Due Date</b></td>
							<td><b>รหัสลูกค้า<br>Customer Code</b></td>
						</tr>
						<tr align="center" height="60">
							<td><input type="text" class="input-sm" name="CustomerService" placeholder="ผู้ดูแลลูกค้า"></td>
							<td><input type="text" class="input-sm" name="payment" placeholder="เงื่อนไขการชำระเงิน"></td>
							<td><input type="date" id="start" name="Duedate"></td>
							<td><input type="text" class="input-sm" name="CustomerNumber" placeholder="รหัสลูกค้า"></td> 
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
						<tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item1" size="2" value="1" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description1" size="50" placeholder="รายการสินค้า"></td>
                           
							<td width="50px"><input type="text" class="input-sm" name="quantity1" placeholder="จำนวนสินค้า" ></td>
							<td width="50px"><input type="text" class="input-sm" name="price1" placeholder="ราคาสินค้า/หน่วย" ></td> 
						</tr>
						<tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item2" size="2" value="2" readonly></td>
							<td width="100px"><input type="text" class="input-sm" name="description2" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity2" placeholder="จำนวนสินค้า" ></td>
							<td width="50px"><input type="text" class="input-sm" name="price2" placeholder="ราคาสินค้า/หน่วย" ></td>
						</tr>	
						<tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item3" size="2" value="3" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description3" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity3" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price3" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						<tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item4" size="2" value="4" readonly></td>
							<td width="100px"><input type="text" class="input-sm" name="description4" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity4" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price4" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						<tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item5" size="2" value="5" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description5" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity5" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price5" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
                        
                        
                        
                        
                        <tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item6" size="2" value="6" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description6" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity6" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price6" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
                        <tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item7" size="2" value="7" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description7" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity7" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price7" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
                        <tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item8" size="2" value="8" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description8" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity8" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price8" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
                        <tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item9" size="2" value="9" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description9" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity9" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price9" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
                        <tr align="center" valign="middle" height="45px">
							<td width="60px"><input type="text" class="input-sm" name="item10" size="2" value="10" readonly ></td>
							<td width="100px"><input type="text" class="input-sm" name="description10" size="50" placeholder="รายการสินค้า"></td>	
							<td width="50px"><input type="text" class="input-sm" name="quantity10" placeholder="จำนวนสินค้า"></td>
							<td width="50px"><input type="text" class="input-sm" name="price10" placeholder="ราคาสินค้า/หน่วย"></td>
						</tr>	
						
						<tr valign="middle" height="60px">
							<td colspan="2" style="color: crimson"><b>***หมายเหตุ : </b><input type="text" name="Comment" size="40" class="input-sm"></td>
							<td colspan="2" style="color: crimson"><b>มัดจำ (Deposit) : </b>
                            	<select class="custom-select-sm" name="Deposit">
  									 <option value="30">30%</option>
                                     <option value="40">40%</option>
                                     <option value="50">50%</option>
                                </select></b></td>
						</tr>
                        <tr valign="middle" height="60px" align="center">
							<td colspan="4" style="color: crimson"><b>***ออกภาษีมูลค่าเพิ่ม / VAT 7% : </b> <input type="checkbox" name="VAT7%" value="VAT7%"> <br></td>
						</tr>
						
					</table>
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
