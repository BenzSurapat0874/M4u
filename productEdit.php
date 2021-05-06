<?php session_start(); ?><?php
	include('conn.php');
	$ID = $_GET['TId'];
	if($_SESSION['UserID']!=""){
		if($_SESSION['status']=="ADMIN"){
			 $hid = "false";
		 }else $hid = "hidden";
	}else $hid = "hidden";
	
 	$strSQL = "SELECT * FROM polo WHERE ID=$ID
	 UNION
	  SELECT *  FROM hat WHERE ID=$ID
	 UNION
	  SELECT *  FROM apron WHERE ID=$ID
	  UNION
	  SELECT *  FROM jacket WHERE ID=$ID
	 UNION
	  SELECT *  FROM pants WHERE ID=$ID
	  UNION
	  SELECT *  FROM sport WHERE ID=$ID
	 UNION
	  SELECT *  FROM suits WHERE ID=$ID
	  UNION
	  SELECT *  FROM tshirt WHERE ID=$ID
	 UNION
	  SELECT *  FROM umbrella WHERE ID=$ID";
	$objQuery = mysql_query($strSQL);
	 
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>แก้ไขข้อมูลสินค้า</title>
  <script>
        window.onload = function(){
            $.get("nav.php", function(data){
                $("#navigation").html(data);
            })
        }
	</script>
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
    /* Popup container - can be anything you want */
    .popup {
      position: relative;
      display: inline-block;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    /* The actual popup */
    .popup .popuptext {
      visibility: hidden;
      width: 160px;
      background-color: #555b;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 8px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -80px;
    }
    
    /* Popup arrow */
    .popup .popuptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }
    
    /* Toggle this class - hide and show the popup */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s;
    }
    
    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
      from {opacity: 0;} 
      to {opacity: 1;}
    }
    
    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity:1 ;}
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

<center>
<div style="width: 60%;" align="left">
<form class="border border-light p-5" name="productEdit" method="post" action="product_edit_action.php">
<?php	while($objResult = mysql_fetch_array($objQuery)) {
			$title=$objResult['Color'];
			if($title=="สีดำ"){
				$a1 = "selected";
			}else if($title=="สีขาว"){
				$a2 = "selected";
			}else if($title=="สีเทา"){
				$a3 = "selected";
			}else if($title=="สีแดง"){
				$a4 = "selected";
			}else if($title=="สีฟ้า"){
				$a5 = "selected";
			}else if($title=="สีเหลือง"){
				$a6 = "selected";
			}else if($title=="สีเขียว"){
				$a7 = "selected";
			}else if($title=="สีน้ำตาล"){
				$a8 = "selected";
			}else if($title=="สีชมพู"){
				$a9 = "selected";
			}else if($title=="สีม่วง"){
				$a10 = "selected";
			}
			$s=$objResult['ID'];
			if($s >= 8000){
				$sel8 = "selected";
			}else if($s >= 7000){
				$sel7 = "selected";
			}else if($s >= 6000){
				$sel6 = "selected";
			}else if($s >= 5000){
				$sel5 = "selected";
			}else if($s >= 4000){
				$sel4 = "selected";
			}else if($s >= 3000){
				$sel9 = "selected";
			}else if($s >= 2000){
				$sel2 = "selected";
			}else if($s >= 1000){
				$sel3 = "selected";
			}else if($s >= 1){
				$sel1 = "selected";
      }
      ?>  <center>
    <p class="h4 mb-4 text-center" >แก้ไขข้อมูลสินค้า</p>
    
    <input type="hidden" id="tid" name="tid" value="<? echo $objResult['ID']; ?>"/>
		 <input type="hidden" id="oldPic" name="oldPic" value="<? echo $objResult['Img']['name'];?>"/>

						<img src="productimg/<? echo $objResult['Img']; ?>" width="200px"/><br>
     </center> <center> <p id="Warn" class="Warn" > </p> </center>
    <div class="input-group mb-4">
     
        <div class="input-group-prepend">
            <span class="input-group-text">เลือกรูปภาพ</span>
        </div>
        <div class="custom-file">
            <input type="file" name="changePic" class="custom-file-input"  onChange="return validate(this.value)">
            <label class="custom-file-label" for="customFile">File Label</label>
    </div> 
        </div>

    <label for="textInput">ชื่อ</label>
    <input type="text" name="name" class="form-control mb-4" value="<? echo $objResult['Name']; ?>" required>

    <label for="textarea">คำอธิบาย</label>
    <textarea class="form-control mb-4" name="des" cols="40" rows="5" ><? echo $objResult['Description']; ?></textarea>

    <label for="select">ประเภทสินค้า</label>
    <select class="browser-default custom-select mb-4" name="type" required>
    <option value="1"  <? echo $sel1; ?>>เสื้อโปโล</option>
							  <option value="2"  <? echo $sel2; ?>>ผ้ากันเปื้อน</option>
							  <option value="3"  <? echo $sel3; ?>>หมวก</option>
							<option value="4"  <? echo $sel4; ?>>กางเกง</option>
							  <option value="5"  <? echo $sel5; ?>>ชุดกีฬา</option>
							  <option value="6"  <? echo $sel6; ?>>ชุดสูท</option>
							<option value="7"  <? echo $sel7; ?>>เสื้อยืด</option>
							  <option value="8"  <? echo $sel8; ?>>ร่ม</option>
							  <option value="9"  <? echo $sel9; ?>>เสิ้อแจ็คเก็ต</option>
    </select>

    <label for="select">สี</label>
    <select class="browser-default custom-select mb-4" name="color" required>
    <option value="สีดำ" <? echo $a1; ?>>สีดำ</option>
        <option value="สีขาว"  <? echo $a2; ?>>สีขาว</option>
							  <option value="สีเทา"  <? echo $a3; ?>>สีเทา</option>
							<option value="สีแดง"  <? echo $a4; ?>>สีแดง</option>
							  <option value="สีฟ้า"  <? echo $a5; ?>>สีฟ้า</option>
							  <option value="สีเหลือง"  <? echo $a6; ?>>สีเหลือง</option>
							<option value="สีเขียว"  <? echo $a7; ?>>สีเขียว</option>
							  <option value="สีน้ำตาล"  <? echo $a8; ?>>สีน้ำตาล</option>
							  <option value="สีชมพู"  <? echo $a9; ?>> สีชมพู</option>
							  <option value="สีม่วง"  <? echo $a10; ?>>สีม่วง</option>

    </select>
    <? } ?>
    <center>
    	<button class="btn btn-info" type="submit" name="Save" value="Save">SAVE</button>
      <input type=”button” style="width:130px;" name=”button” class="btn btn-info" value="Cancel"  onclick="window.location='product_admin.php'"/>
	</center>
</form>
</div>
</center>

  <!-- SCRIPTS -->
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