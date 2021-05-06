<?php session_start(); ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ประวัติ</title>
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
    .bg1{
      background-color:#e0ebeb;
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
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>เกี่ยวกับเรา<br></strong>
                </h1>

              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
				<strong>เกี่ยวกับเรา<br></strong>
                </h1>

              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
				<strong>เกี่ยวกับเรา<br></strong>
                </h1>
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
	<div>
		<h2>ประวัติ</h2>
	</div>
<br><br>
  <div class="container">
   <h1 class="" >ส่วนหนึ่งของลูกค้าที่ไว้วางใจเรา</h1>
     <!-- Card deck -->
		<div class="card-deck">

			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom1.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กรมบังคับคดี</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom2.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กรมคุมความประพฤติ</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom3.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กรมการข้าว</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom4.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กรมส่งเสริมสหกรณ์และการเกษตร</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
		  </div>
  	 <!-- Card deck -->
	
     <!-- Card deck -->
		<div class="card-deck">

			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom5.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กรมฝนหลวงและการยินเกษตร</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom6.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กรมชลประทาน</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom7.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กระทรวงยุติธรรม</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
						
		  </div>
  	 <!-- Card deck -->
	  
     <!-- Card deck -->
		<div class="card-deck">
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom8.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กระทรวงเกษตรและสหกรณ์</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom9.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">สำนักงานปฏิรูปที่ดินเพื่อการเกษตร</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom10.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">สำนักงานประกันสังคม</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom11.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">ศาลแขวงจังหวัดนครราชศรีมา</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
		  </div>
  	 <!-- Card deck -->
	  
     <!-- Card deck -->
		<div class="card-deck">
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom12.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">ศาลเยาวชนครอบครัว</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom13.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">ศาลอาญา</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom14.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">ช่อง 7 สี</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
				
		  </div>
  	 <!-- Card deck -->
	  
     <!-- Card deck -->
		<div class="card-deck">
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom15.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">กลุ่ม บจ.วารีเทพ</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom16.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">IRPC</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom17.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">ปปง.</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
			<!-- Card -->
			<div class="card mb-5">
			  <!--Card image-->
			  <div class="view overlay">
				<img class="card-img-top" src="img/custom/custom18.jpg" alt="Card image cap">
				<a href="#!">
				  <div class="mask rgba-white-slight"></div>
				</a>
			  </div>

			  <!--Card content-->
			  <div class="card-body">
				<!--Title-->
				<h4 class="card-title">เดลต้า</h4>
				<!--Text-->
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			  </div>
			</div>
			<!-- Card -->
			
		  </div>
  	 <!-- Card deck -->
	  
	  
	  
	  
	  
   </div>

   
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
