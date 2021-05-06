<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home-หน้าแรก</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
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

  </style>
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
        <div class="view" style="background-image: url('img/cover/1.jpg'); background-repeat: no-repeat background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>คำโฆษณาหลัก</strong>
              </h1>

              <p>
                <strong>คำอธิบายบรรทัดที่ 1</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>คำอธิบายเพิ่มเติมรรทัดที่ 2</strong>
              </p>

              <a target="_blank" href="" class="btn btn-outline-white btn-lg">เรียกดูสินค้าเพิ่มเติม
<!--                <i class="fas fa-graduation-cap ml-2"></i>-->
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/cover/2.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>คำโฆษณาหลัก</strong>
              </h1>

              <p>
                <strong>คำอธิบายบรรทัดที่ 1</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>คำอธิบายเพิ่มเติมรรทัดที่ 2</strong>
              </p>

              <a target="_blank" href="" class="btn btn-outline-white btn-lg">เรียกดูสินค้าเพิ่มเติม
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/cover/3.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>คำโฆษณาหลัก</strong>
              </h1>

              <p>
                <strong>คำอธิบายบรรทัดที่ 1</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>คำอธิบายเพิ่มเติมรรทัดที่ 2</strong>
              </p>

              <a target="_blank" href="" class="btn btn-outline-white btn-lg">เรียกดูสินค้าเพิ่มเติม
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

	
	
  <!--Main layout-->
  <main>
    <div class="container">
		
      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

		  <!--Main layout-->
		  <main>
			<div class="container">
				<h2 class="h2 mb-2"><strong>สินค้าขายดี</strong></h2><br>
			  <!--Section: Products v.3-->
			  <section class="text-center mb-4">

				<!--Grid row-->
				<div class="row wow fadeIn">

				  <!--Grid column-->
				  <div class="col-lg-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card">

					  <!--Card image-->
					  <div class="view overlay"><a href="product.php" >
						<img src="img/bestsell/1.jpg" class="card-img-top" 
						  alt=""> </a>
						<a>
						  <div class="mask rgba-white-slight" href="product.php"></div>
						</a>
					  </div>
					  <!--Card image-->

					  <!--Card content-->
					  <div class="card-body text-center">
						<!--Category & Title-->
						<a href="product.php" class="grey-text">
						  <h5>เสื้อโปโล</h5>
						</a>
						<h5>
						  <strong>
							<a href="product.php" class="dark-grey-text">คำอธิบาย
              <span class="badge badge-pill primary-color">Bestseller อันดับ1</span>
							  
							</a>
						  </strong>
						</h5>
					  </div>
					  <!--Card content-->

					</div>
					<!--Card-->

				  </div>
				  <!--Grid column-->

				  <!--Grid column-->
				  <div class="col-lg-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card">

					  <!--Card image-->
					  <div class="view overlay"><a href="product.php" >
						<img src="img/bestsell/2.jpg" class="card-img-top"
						  alt=""></a>
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>
					  <!--Card image-->

					  <!--Card content-->
					  <div class="card-body text-center">
						<!--Category & Title-->
						<a href="product.php" class="grey-text">
						  <h5>เสื้อยืด</h5>
						</a>
						<h5>
						  <strong>
							<a href="product.php" class="dark-grey-text">คำอธิบาย</a>
              <span class="badge badge-pill primary-color">Bestseller อันดับ2</span>
						  </strong>
						</h5>
					  </div>
					  <!--Card content-->

					</div>
					<!--Card-->

				  </div>
				  <!--Grid column-->

				  <!--Grid column-->
				  <div class="col-lg-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card">

					  <!--Card image-->
					  <div class="view overlay"><a href="product.php" >
						<img src="img/bestsell/3.jpg" class="card-img-top"
						  alt=""></a>
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>
					  <!--Card image-->

					  <!--Card content-->
					  <div class="card-body text-center">
						<!--Category & Title-->
						<a href="product.php" class="grey-text">
						  <h5>เสื้อเจ็คเก็ต</h5>
						</a>
						<h5>
						  <strong>
							<a href="product.php" class="dark-grey-text">คำอธิบาย
							  <span class="badge badge-pill primary-color">Bestseller อันดับ3</span>
							</a>
						  </strong>
						</h5>
					  </div>
					  <!--Card content-->

					</div>
					<!--Card-->

				  </div>
				  <!--Grid column-->

				  <!--Fourth column-->
				  <div class="col-lg-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card">

					  <!--Card image-->
					  <div class="view overlay"> <a href="product.php" >
						<img src="img/bestsell/4.jpg" class="card-img-top"
						  alt=""> </a>
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>
					  <!--Card image-->

					  <!--Card content-->
					  <div class="card-body text-center">
						<!--Category & Title-->
						<a href="product.php" class="grey-text">
						  <h5>หมวก</h5>
						</a>
						<h5>
						  <strong>
							<a href="product.php" class="dark-grey-text">คำอธิบาย</a>
              <span class="badge badge-pill primary-color">Bestseller อันดับ4</span>
						  </strong>
						</h5>
					  </div>
					  <!--Card content-->

					</div>
					<!--Card-->

				  </div>
				  <!--Fourth column-->

				</div>
				<!--Grid row-->

			  </section>
			  <!--Section: Products v.3-->
			</div>
		  </main>
		  <!--Main layout-->
        </div>
        <!--Grid row-->
      </section>
      <!--Section: Main info-->

      <hr class="my-5">
      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

		  <!--Main layout-->
		  <main>
        
			<div class="container">
       
        <h2 class="h2 mb-2"><strong>สินค้า</strong></h2><br>
        
        <div class="card-deck" >
            <div class="card" style="width: 12rem;">
             <a href="product.php">  
              <img src="img\product\M4u0175.jpg" class="card-img-top" style="width:180px; height: 220px;"  alt="ไปหน้าสินค้า">
              <div class="card-body">
                <h5 class="card-title" style="margin-right: -50px;">เสื้อโปโล</h5>  </a>
              </div>
            </div>
            <div class="card" style="width: 12rem;">
             <a href="product.php">  
              <img src="img\product\M40054.jpg" class="card-img-top" style="width:180px; height: 220px;"    alt="...">
              <div class="card-body">
                <h5 class="card-title">เสื้อยืด</h5></a>
              </div>
            </div>
            <div class="card" style="width: 12rem;">
             <a href="product.php">  
              <img src="img\product\M4u0198.jpg" class="card-img-top" style="width:180px; height: 220px;" alt="...">
              <div class="card-body">
                <h5 class="card-title" >เสื้อเจ็คเก็ต</h5></a>
              </div>
            </div>
            <div class="card" style="width: 12rem;">
                <a href="product.php">  
                <img src="img\product\M4u0196.jpg" class="card-img-top" style="width:180px; height: 220px;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">เสื้อสูท</h5></a>
                </div>
              </div>
              <div class="card" style="width: 12rem;">
                  <a href="product.php">  
                  <img src="img\product\M4u0070.jpg" class="card-img-top" style="width:180px; height: 220px;"  alt="...">
                  <div class="card-body">
                    <h5 class="card-title">หมวก</h5></a>
                  </div>
                  
                </div>
                
          </div>
        </div>
        
		  </main>
      <!--Main layout-->
      
        <!--Grid row-->
      </section>
      <!--Section: Main info-->
		
      
      
      <main>
      <hr class="mb-5">
        <h2 class="h2 mb-2"><strong>ไซต์เสื้อ</strong></h2><br>
      <div class="container">
          <div class="row">
          <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="img/size1.jpg" class="card-img" alt="...">
          
        </div>
        </div>
      
      
          <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="img/size2.jpg" class="card-img" alt="...">
          
        </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <!--Main layout-->
<?php include_once('footer.php'); ?>
	
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
