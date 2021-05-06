<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Teamporary Delivery</title>
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
<body><center>
 	
	  <!----------------------------- Form ------------------------------>
	<form action="admin-quotation-print.php" method="post">
		<table border="0" width="600px" align="center">
			<tr height="100">
				<td><img src="Top.png" width="600px" ></td>
			</tr>
			<tr>
				<td>
					<h5 style="color: #000138" align="center">บิลส่งของชั่วคราว (สำเนา)</h5>
			
				<!---------------ส่วนหัว--------------->
					<table border="1" width="600px">
						<tr align="center" height="110px">
							<td width="425"><h4>ชื่อลูกค้า</h4><b><?php echo $_POST['Customer']; ?></b>
							<td><h4>วันที่</h4> <b>20-19-2019</b></td>
						</tr>

					</table>
					<table border="1" width="600px"><br>
						<tr align="center" bgcolor="#49D6F2">
							<td width="60px"><b>ลำดับที่<br>Item</b></td>
							<td width="100px"><b>รายการ<br>Description</b></td>
							<td width="50px"><b>จำนวน<br>Quantity</b></td>
							<td width="50px"><b>ราคา/หน่วย<br>Price/ Unit</b></td>
						</tr>
						<!---------------ดึงค่ามาจากฟอร์ม--------------->
						<tr align="center" valign="top" height="300px">
							<td width="30px"><?php echo $_POST['item1'];?></td>
							<td width="200px"><?php echo $_POST['description1']; ?></td>	
							<td width="50px"><?php echo $_POST['quantity1']; ?></td>
							<td width="50px"><?php echo $_POST['price1']; ?></td>
						</tr>
						
						<tr valign="middle" height="60px">
							<td colspan="3" style="color: crimson"><b> สินค้ารับไปแล้วเงินยังไม่ชำระ (Received in good not yet Palment) </b></td>
							<td></b></td>
						</tr>
					</table>
		
					<table border="1" width="600px"><br>
						<tr align="center" height="80px" >
							<td width="400px"valign="bottom"><b>ลงชื่อ(___________________________)ผู้รับสินค้า<br>วันที่ : <?php echo $_POST['Duedate1']; ?></b></td>
							<td width="400px"valign="bottom"><b>ลงชื่อ(___________________________)ผู้ส่งสินค้า<br>วันที่ : <?php echo $_POST['Duedate2']; ?></b></td>
						</tr>
					</table><br>
									
		</form>
	
			<center><input type="button" class="btn btn-info" id="hid" value="---> Print <---" width="200px" onClick="window.print();" >
				<input type="button" class="btn btn-info" id="hid" value="---> Back <---" onclick="location.href='Temporary Delivery.php'">
			</center>
		</center>
	
	
  </body>
</html>
