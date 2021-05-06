<?php
	require 'connect.php';

 $namereview = $_POST['NameReview'];
 $review = $_POST['Review'];
 
 $query = "INSERT INTO Review (ID,Name,Review) VALUES('','$namereview','$review')";
 $result = mysqli_query($dbcon ,$query);

	if($result)
	{?>
		<script>alert("บันทึกข้อมูลสำเเร็จ"); 
				window.location = "review1.php";</script>
	<?php	
	}
	else
	{?>
		<script>alert("ไม่สามารถบันทึกข้อมูลได้"); 
				window.location = "Review.php";</script>
	<?php	
	}

?>