<?php session_start(); ?><?php
include('conn.php');

 if(isset($_POST['Save']))
 {
	
	
	$typee = $_POST['type'];
	function intserts($g) {
		$add =""; $del =""; 
	    $id =$_POST['tid'];
	    
		
		
			if($id >= 8000){
				$sel = umbrella;
			}else if($id >= 7000){
				$sel = tshirt;
			}else if($id >= 6000){
				$sel = suits;
			}else if($id >= 5000){
				$sel = sport;
			}else if($id >= 4000){
				$sel = pants;
			}else if($id >= 3000){
				$sel = jacket;
			}else if($id >= 2000){
				$sel = apron;
			}else if($id >= 1000){
				$sel = hat;
			}else if($id >= 1){
				$sel = polo;
			}
		

		

			$add ="INSERT INTO $g(Img,Name,Description,Color) SELECT Img,Name,Description,Color FROM $sel WHERE ID = $id";
			$del ="DELETE FROM $sel WHERE ID = $id";
		

			$result = mysql_query($add)or die(mysql_error());
			$result1 = mysql_query($del)or die(mysql_error());
			if($result1) {
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			}else{
			echo "<script>alert('Update Failed');</script>";
			}  

		}

	
	}
	 function update() {


		$update =""; 
		$images = $_FILES['changePic']['name'];
	   $ids =$_POST['tid'];
	   $names = $_POST['name'];
	   $dess = $_POST['des'];
	   $types = $_POST['type'];
	   $colors = $_POST['color'];
	   
	   
	  	 if($ids >= 8000){
			$w = umbrella;
		}else if($ids >= 7000){
			$w = tshirt;
		}else if($ids >= 6000){
			$w = suits;
		}else if($ids >= 5000){
			$w = sport;
		}else if($ids >= 4000){
			$w = pants;
		}else if($ids >= 3000){
			$w = jacket;
		}else if($ids >= 2000){
			$w = apron;
		}else if($ids >= 1000){
			$w = hat;
		}else if($ids >= 1){
			$w = polo;
		}
		   
		  
	
		if(isset($_FILES['changePic']['name'])&&($_FILES['changePic']['name'])!="")
		{ echo "<script>alert('Update Failed');</script>";
			$target = "productimg/".basename($images);
			move_uploaded_file($_FILES['changePic']['tmp_name'], $target);
			$update ="UPDATE $w SET Img='$images', Name='$names',Description='$dess',Color='$colors' WHERE ID=$ids";	
		  }
		else {
			$update ="UPDATE $w SET Name='$names',Description='$dess',Color='$colors' WHERE ID=$ids ";
			}
		$result2 = mysql_query($update)or die(mysql_error());

		if($result2){
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
		}else{
			echo "<script>alert('Update Failed');</script>";
		}
		}	
		
	
	
	

	switch ($typee) {
		case 1: update();
			
			
			break;
		case 2:update();
			
			
			break;
		case 3:update();
		
			
			break;
		case 4:update();
			
			
			break;	
		case 5:update();
			
			
			break;
		case 6:update();	
			
				
			break;
		case 7:update();
		
			
			break;
		case 8:update();
			
			
			break;
		case 9:update();
			
			
			break;		
		
		default:
			exit;


		
	



		
		}
?>
