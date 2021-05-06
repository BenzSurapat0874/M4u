<?php session_start(); 
$_SESSION['num'] = 1;?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>สินค้า</title>
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

<?php include_once('header.php');
 ?>
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
                  <strong>สินค้า<br></strong>PRODUCTS
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
                <strong>สินค้า<br></strong>PRODUCTS
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
                <strong>สินค้า<br></strong>PRODUCTS
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
                  <h2 class="h2 mb-2"><strong> <?php         
                            if($_SESSION['status']=='ADMIN') { 
                                echo 'การจัดการ';
                            }
                    ?>สินค้า</strong></h2><br>
                <!--Section: Products v.3-->
                <section class="text-center mb-4">
  
                  <!--Grid row-->
                  <div class="row wow fadeIn">
  
              <center>
                  <div style="margin-bottom: 20px;">
                    <table>
                  <tr>
                   <td>
                     
                     <div class="input-group md-form form-sm form-1 pl-0" style="margin-left: 800px; width: 300px;margin-bottom: 5px;">
                      
                      <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" id="search_text">
                    <div class="input-group-prepend" >
                      <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-black-50"
                        aria-hidden="true"></i></span>
                      </div>
                    </div>
                     
                  </td>
                    
                  </tr>
                   </table>
                      </div>
                  <div class="contentblock">
                  <section>
                    <div class="container-fluid" >
                          <div class="container">
                      
                          <div class="row" id="result">
                      </div> 
                            </div>	
                                     
            
                        </div>
                  
                       </div>
                    </div>
                  </div>
                </section>
                  
                  </div>	  
             </center>
            
            
  
  
  
                  </div>
          
  
                </section>
              
              </div>
            </main>
            <!--Main layout-->
          </div>
          <!--Grid row-->
        </section>
        <!--Section: Main info-->
  
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
<script>
    $(document).ready(function(){
    
     load_data();
    
     function load_data(query)
     {
      $.ajax({
       url:"load_product.php?i=5",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('#result').html(data);
       }
      });
     }
     $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
       load_data(search);
      }
      else
      {
       load_data();
      }
     });
    });
    </script>
</html>
