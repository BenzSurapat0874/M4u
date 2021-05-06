<?php session_start(); ?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>แสดงความคิดเห็น</title>
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

<body>
	<center>
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
                  <strong>แสดงความคิดเห็น</strong>
                </h1>

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
	</div
	
	><br><br><br><br>
		
	<!----------------Form---------------------------->
		<div class="card" style="width: 80%;">

			<!--Card content-->
			<div class="card-body px-lg-5">

					<div class="text-center">
						<h4 style="color: #00C2EB">โปรดแสดงความคิดเห็นเกี่ยวกับเรา</h4>
					</div><br>
				<!-- Form -->
				<form class="md-form" style="color: #757575;" action="save.php" method="post"">

					<label for="input" style="margin-top: 10px; color: black">ชื่อผู้สั่งสินค้า</label>
					<br><input class="form-control"type="text" name="NameReview" placeholder="Enter your name here.">

					
					<label for="textarea" style="margin-top: 120px; color: black">ความคิดเห็น</label>
					<br><br><textarea class="form-control md-textarea" rows="5" cols="50" name="Review" placeholder="Enter comment here."></textarea>


					<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit">ส่งความคิดเห็น</button>

				</form>

			</div>

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