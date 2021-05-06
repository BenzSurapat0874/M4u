<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <strong>M4U</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
		<ul class="navbar-nav mr-auto"></ul>


        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">หน้าแรก
            <span class="sr-only">(current)</span>
            </a>          
		  </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">สินค้า</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buy.php">สั่งซื้อ</a>
          </li>
		<div class="dropdown">
			<li class="nav-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   <a class="nav-link" href="">เกี่ยวกับเรา</a>
			</li>
		  <div class="dropdown-menu dropdown-primary">
			<a class="dropdown-item" href="about1.php">เกี่ยวกับเรา</a>
			<a class="dropdown-item" href="review.php">รีวิวจากลูกค้า</a>
			<a class="dropdown-item" href="q.php">คำถามที่พบบ่อย</a>
		  </div>
		</div>
				
          <li class="nav-item">
            <a class="nav-link" href="contact.php" >ติดต่อเรา</a>
            
          </li>
         
          <?php  
                        if(isset($_SESSION['status'])){
                            if($_SESSION['status']=='ADMIN') { 
                                echo '  
                                <div class="dropdown">

		 
			<li class="nav-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   <a class="nav-link" href="">ระบบการจัดการสินค้า</a>
			</li>
		  <div class="dropdown-menu dropdown-primary">
			<a class="dropdown-item" href="product_admin.php"  >จัดการสินค้า</a>
			<a class="dropdown-item" href="add_product.php">เพิมสินค้า</a>
      <a class="dropdown-item" href="admin-quotation.php">ใบเสนอราคา</a>
      <a class="dropdown-item" href="Temporary Delivery.php">บิลส่งของชั่วคราว</a>
		  </div>
		</div>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>                              
                              
                                ';
                            }
                            else{
                                echo 'fail';
                            }
                        }
                        
                        
                    ?>
        </ul>
      </div>
    </div>
  </nav>
                  
                
                