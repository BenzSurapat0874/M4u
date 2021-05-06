<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login-เข้าสู่ระบบ</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <link href="css/style.new.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
  </style>
</head>

<body>
<div class="materialContainer">
   <div class="box">
      <div class="title">LOGIN</div><br><br>
	   
    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="checklogin.php" name="Login" method="post">

      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" class="form-control" name="txtUsername"
        required pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
        <label for="materialLoginFormEmail">Username</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" name="txtPassword" 
        pattern="^[a-zA-Z0-9]+$" minlength="2" required class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>
		<br>
      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
    </form>
    <!-- Form -->

   </div>


</div>
	
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
