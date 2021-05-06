<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ใบเสนอราคา</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		@page {margin: 0;}
		
		@media print
			{
				#hid{display: none;}
			}
	</style>
	
</head>

<body style="font-size: 12px">
	
	<table border="0" width="600px" align="center">
		<tr height="100">
			<td><img src="Top.png" width="600px" ></td>
		</tr>
		<tr align="char">
			<td>
				<h5 style="color: #000138" align="center">ใบเสนอราคา (Quotation)</h5>
			
				<!---------------ส่วนหัว--------------->
				<table border="1" width="600px">
					<tr align="center">
						<td colspan="3"><h5>ชื่อลูกค้า</h5><b><?php echo $_POST['Customer']; ?></b><br></td>
						<td><h5>วันที่</h5>20-09-2019<br></td>
					</tr>
					<tr align="center" bgcolor="#6C95EC">
						<td><b>ผู้ดูแลลูกค้า<br>Customer Service Advisor</b></td>
						<td><b>เงื่อนไขการชำระเงิน<br>Term of payment</b></td>
						<td><b>วันถึงกำหนดจ่าย<br>Due Date</b></td>
						<td><b>รหัสลูกค้า<br>Customer Code</b></td>
					</tr>
					<tr align="center" height="30"> 
						<td><?php echo $_POST['CustomerService']; ?></td>
						<td><?php echo $_POST['payment']; ?></td>
						<td><?php echo $_POST['Duedate']; ?></td>
						<td><?php echo $_POST['CustomerNumber']; ?></td> 
					</tr>
				</table>

				<!---------------รายการสินค้า--------------->
				<table border="1" width="600px"><br>
					<tr align="center" bgcolor="#49D6F2">
						<td width="40px"><b>ลำดับที่<br>Item</b></td>
						<td width="200px"><b>รายการ<br>Description</b></td>
						<td width="50px"><b>จำนวน<br>Quantity</b></td>
						<td width="50px"><b>ราคา/หน่วย<br>Price/ Unit</b></td>
						<td width="70px"><b>จำนวนเงิน<br>Amount</b></td>
					</tr>
					<!---------------ดึงค่ามาจากฟอร์ม--------------->
					<tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description1'] != ""){echo $_POST['item1'];} ?></td>
						<td width="200px"><?php echo $_POST['description1']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity1']; ?></td>
						<td width="50px"><?php echo $_POST['price1']; ?></td>
						<td width="70px"><?php if($_POST['quantity1'] == "" || $_POST['price1'] == "") 
												{echo(" ");}
												else{echo $Total1 = $_POST['quantity1'] * $_POST['price1'];}
										 ?></td>
					</tr>
					<tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description2'] != ""){echo $_POST['item2'];} ?></td>
						<td width="200px"><?php echo $_POST['description2']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity2']; ?></td>
						<td width="50px"><?php echo $_POST['price2']; ?></td>
						<td width="70px"><?php if($_POST['quantity2'] == "" || $_POST['price2'] == "") 
												{echo(" ");}
												else{echo $Total2 = $_POST['quantity2'] * $_POST['price2'];}
										 ?></td>
					</tr>
					<tr align="center" valign="middle" height="25px">
                    	<td width="30px"><?php if($_POST['description3'] != ""){echo $_POST['item3'];} ?></td>
						<td width="200px"><?php echo $_POST['description3']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity3']; ?></td>
						<td width="50px"><?php echo $_POST['price3']; ?></td>
						<td width="70px"><?php if($_POST['quantity3'] == "" || $_POST['price3'] == "") 
												{echo(" ");}
												else{echo $Total3 = $_POST['quantity3'] * $_POST['price3'];}
										 ?></td>
					</tr>
					<tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description4'] != ""){echo $_POST['item4'];} ?></td>
						<td width="200px"><?php echo $_POST['description4']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity4']; ?></td>
						<td width="50px"><?php echo $_POST['price4']; ?></td>
						<td width="70px"><?php if($_POST['quantity4'] == "" || $_POST['price4'] == "") 
												{echo(" ");}
												else{echo $Total4 = $_POST['quantity4'] * $_POST['price4'];}
										 ?></td>
					</tr>
					<tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description5'] != ""){echo $_POST['item5'];} ?></td>
						<td width="200px"><?php echo $_POST['description5']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity5']; ?></td>
						<td width="50px"><?php echo $_POST['price5']; ?></td>
						<td width="70px"><?php if($_POST['quantity5'] == "" || $_POST['price5'] == "") 
												{echo(" ");}
												else{echo $Total5 = $_POST['quantity5'] * $_POST['price5'];}
										 ?></td>
					</tr>
                    
                    <tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description6'] != ""){echo $_POST['item6'];} ?></td>
						<td width="200px"><?php echo $_POST['description6']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity6']; ?></td>
						<td width="50px"><?php echo $_POST['price6']; ?></td>
						<td width="70px"><?php if($_POST['quantity6'] == "" || $_POST['price6'] == "") 
												{echo(" ");}
												else{echo $Total6 = $_POST['quantity6'] * $_POST['price6'];}
										 ?></td>
					</tr>
                    
                    <tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description7'] != ""){echo $_POST['item7'];} ?></td>
						<td width="200px"><?php echo $_POST['description7']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity7']; ?></td>
						<td width="50px"><?php echo $_POST['price7']; ?></td>
						<td width="70px"><?php if($_POST['quantity7'] == "" || $_POST['price7'] == "") 
												{echo(" ");}
												else{echo $Total7 = $_POST['quantity5'] * $_POST['price5'];}
										 ?></td>
					</tr>
                    
                    <tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description8'] != ""){echo $_POST['item8'];} ?></td>
						<td width="200px"><?php echo $_POST['description8']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity8']; ?></td>
						<td width="50px"><?php echo $_POST['price8']; ?></td>
						<td width="70px"><?php if($_POST['quantity8'] == "" || $_POST['price8'] == "") 
												{echo(" ");}
												else{echo $Total8 = $_POST['quantity8'] * $_POST['price8'];}
										 ?></td>
					</tr>
                    
                    <tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description9'] != ""){echo $_POST['item9'];} ?></td>
						<td width="200px"><?php echo $_POST['description9']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity9']; ?></td>
						<td width="50px"><?php echo $_POST['price9']; ?></td>
						<td width="70px"><?php if($_POST['quantity9'] == "" || $_POST['price9'] == "") 
												{echo(" ");}
												else{echo $Total9 = $_POST['quantity9'] * $_POST['price9'];}
										 ?></td>
					</tr>
                    
                    <tr align="center" valign="middle" height="25px">
						<td width="30px"><?php if($_POST['description10'] != ""){echo $_POST['item10'];} ?></td>
						<td width="200px"><?php echo $_POST['description10']; ?></td>	
						<td width="50px"><?php echo $_POST['quantity10']; ?></td>
						<td width="50px"><?php echo $_POST['price10']; ?></td>
						<td width="70px"><?php if($_POST['quantity10'] == "" || $_POST['price10'] == "") 
												{echo(" ");}
												else{echo $Total10 = $_POST['quantity10'] * $_POST['price10'];}
										 ?></td>
					</tr>
                    
								
							<?php  //---------------------ไม่คิดค่า VAT 7 %---------------------
								if($_POST['VAT7%'] == "")  {	
												//-------คิดยอดรวมราคา--------
									$Total = $Total1+$Total2+$Total3+$Total4+$Total5+$Total6+$Total7+$Total8+$Total9+$Total10;?>
									<tr align="center" valign="middle" height="100px">
									<td colspan="2">
								<?php     //---------คิดยอดคงเหลือ----------
									if($_POST['Deposit'] == "30") { $Deposit = $Total *0.3;}
									else if ($_POST['Deposit'] == "40") { $Deposit = $Total *0.4;}
									else if ($_POST['Deposit'] == "50") { $Deposit = $Total *0.5;}
									
									$Balance = $Total -  $Deposit ;  }
									$Grang = 0;
									$Vat = 0; 
									
									
									?>	
                                    
                                    
                                    
                                    <?php  //---------------------ไม่คิดค่า VAT 7 %---------------------
								if($_POST['VAT7%'] != "")  {	
												//-------คิดยอดรวมราคา--------
									$Total = $Total1+$Total2+$Total3+$Total4+$Total5+$Total6+$Total7+$Total8+$Total9+$Total10;?>
									<tr align="center" valign="middle" height="100px">
									<td colspan="2">
								<?php     
										//---------Deposit----------
									if($_POST['Deposit'] == "30") { $Deposit = $Total *0.3;}
									else if ($_POST['Deposit'] == "40") { $Deposit = $Total *0.4;}
									else if ($_POST['Deposit'] == "50") { $Deposit = $Total *0.5;}
											//---------Vat 7 %----------
									$Vat = $Total * (7/100);
											//--------- Grang ----------
									$Grang = $Total + $Vat;
											//---------คิดยอดคงเหลือ----------
									$Balance = $Grang -  $Deposit ;  }?>	

									
									

									<?php	//---------------------แปลงเป็นตัวหนังสือ---------------------
									function bathformat($number) 
									{
									  	$numberstr = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
										$digitstr = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');

									  	$number = str_replace(",","",$number); // ลบ comma
									  	$number = explode(".",$number); // แยกจุดทศนิยมออก

									  	// เลขจำนวนเต็ม
									  	$strlen = strlen($number[0]);
									  	$result = '';
									  		for($i=0;$i<$strlen;$i++) 
											{
												$n = substr($number[0], $i,1);
												if($n!=0) 
												{
												  if($i==($strlen-1) AND $n==1){ $result .= 'เอ็ด'; }
												  elseif($i==($strlen-2) AND $n==2){ $result .= 'ยี่'; }
												  elseif($i==($strlen-2) AND $n==1){ $result .= ''; }
												  else{ $result .= $numberstr[$n]; }
												  $result .= $digitstr[$strlen-$i-1];
												}
									  		}
												$result .= 'บาท';
												$result .= 'ถ้วน';
												return $result;
									}  ?>
							<b><?php echo bathformat($Total) ;?>	</b>	

						</td>
						<td colspan="2" align="left">
							<b>รวม / Sub Total</b><br>
							<b>ภาษีมูลค่าเพิ่ม / VAT 7%</b><br>
							<b>รวมเงินทั้งสิน / Grang</b><br>
							<b>มัดจำ / Deposit</b><br>
							<b>ยอดเงินคงเหลือ / Balance</b>
						</td>
						<td>
							<b><?php echo($Total);?></b><br>
							<b><?php echo($Vat);?></b><br>
							<b><?php echo($Grang);?></b><br>
							<b><?php echo($Deposit) ?></b><br>
							<b><?php echo($Balance);?></b>
						</td>	
					</tr>
					
					<tr valign="middle" height="40px">
						<td colspan="5" style="color: crimson">***หมายเหตุ : <?php echo $_POST['Comment'] ?></td>
					</tr>
				</table>
				<table border="1" width="600px"><br>
					<tr height="40" align="center">
						<td width="250"><b>ผู้เสนอราคา</b></td>
						<td width="500"><b>สำหรับลูกค้า อนุมัติซื้อโดย</b></td>
					</tr>
					<tr height="80" align="center">
						<td><br><b>______________________________</b><br><b>(ชญาภา อัษฐกรเมธา)</b></td>
						<td><br><b>_________________________________________________</b><br><b>(&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;)</b></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<center><input type="button" class="btn btn-info" id="hid" value="---> Print <---" width="200px" onClick="window.print();" >
		<input type="button" class="btn btn-info" id="hid" value="---> Back <---" onclick="location.href='admin-quotation.php'"></center>
		   
	
	
	
	

</body>
</html>