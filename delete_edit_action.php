<?php session_start(); ?>
<?include('conn.php');

 
		$delete ="";
		$ID = $_GET['TId'];
		echo $ID;
		if($ID >= 8000){
			$sa = umbrella;
		}else if($ID >= 7000){
			$sa = tshirt;
		}else if($ID >= 6000){
			$sa = suits;
		}else if($ID >= 5000){
			$sa = sport;
		}else if($ID >= 4000){
			$sa = pants;
		}else if($ID >= 3000){
			$sa = jacket;
		}else if($ID >= 2000){
			$sa = apron;
		}else if($ID >= 1000){
			$sa = hat;
		}else if($ID >= 1){
			$sa = polo;
		}

		
		$delete ="DELETE FROM $sa WHERE ID=$ID";
		
		
		
	
	$result = mysql_query($delete)or die(mysql_error());
	 
	if($result) {
		echo "<script>alert('delete Successful');window.location.href='product_admin.php';</script>";
	}else{
		echo "<script>alert('delete Failed');</script>";
	}

 
?>
