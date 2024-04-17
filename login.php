<?php
session_start();
include 'includes/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($_POST["submit"])) {
        $loginquery = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $loginquery);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            
            if ($row && md5($password) === $row['password']) {
                $_SESSION["user_id"] = $row['u_id'];
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid Username or Password!";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SS Agriqulture</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.png"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/default.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    
  </head>
  <body>
    <!-- Pre-loader-start -->
    <!-- <div id="preloader">
      <div class="tg-cube-grid">
        <div class="tg-cube tg-cube1"></div>
        <div class="tg-cube tg-cube2"></div>
        <div class="tg-cube tg-cube3"></div>
        <div class="tg-cube tg-cube4"></div>
        <div class="tg-cube tg-cube5"></div>
        <div class="tg-cube tg-cube6"></div>
        <div class="tg-cube tg-cube7"></div>
        <div class="tg-cube tg-cube8"></div>
        <div class="tg-cube tg-cube9"></div>
      </div>
    </div> -->
    <!-- Pre-loader-end -->
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header id="home">
      <div id="header-top-fixed"></div>
      <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
          <div class="row">
            <div class="col-12">
              <div class="mobile-nav-toggler">
                <i class="flaticon-layout"></i>
              </div>
              <div class="menu-wrap">
                <nav class="menu-nav">
                  <div class="logo">
                    <a href="index.html"
                      ><img src="assets/img/logo/logo.png" alt="Logo"
                    /></a>
                  </div>
                  <div class="navbar-wrap main-menu d-none d-xl-flex">
                    <ul class="navigation">
                      <li class="active menu-item-has-children">
                        <a href="#home" class="section-link">Home</a>
                        <ul class="sub-menu">
                          
                          </li>
                          <li><a href="index-2.html"></a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#features" class="section-link">Features</a>
                      </li>
                      <li>
                        <a href="#paroller" class="section-link">Product</a>
                      </li>
                      <li>
                        <a href="#ingredient" class="section-link"
                          >Ingredient</a
                        >
                      </li>
                      <li>
                        <a href="#pricing" class="section-link">Pricing</a>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="shop.html">Shop</a>
                        <ul class="sub-menu">
                          <li><a href="shop.html">Our Shop</a></li>
                          <li><a href="shop-details.html">Shop Details</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#news" class="section-link">News</a>
                        <ul class="sub-menu">
                          <li><a href="blog.html">Our Blog</a></li>
                          <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.html">contacts</a></li>
                      <?php
						if(empty($_SESSION["user_id"])) 
							{
								echo '<li><a href="login.php">Login</a></li>
                      <li><a href="registration.php">Registration</a></li>';
							}
						else
							{

                echo '<li><a href="your_orders.php">My Orders</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
							}

						?>
                    </ul>
                  </div>
                  <ul>
                    </ul>                    
                      
                        
              <!-- Mobile Menu  -->
              <div class="mobile-menu">
                <nav class="menu-box">
                  <div class="close-btn"><i class="fas fa-times"></i></div>
                  <div class="nav-logo">
                    <a href="index.html"
                      ><img src="assets/img/logo/logo.png" alt=""
                    /></a>
                  </div>
                  <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                  </div>
                  <div class="social-links">
                    <ul class="clearfix">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="menu-backdrop"></div>
              <!-- End Mobile Menu -->
            </div>
          </div>
        </div>
      </div>

      <!-- header-search -->
      <div
        class="search-popup-wrap"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="search-wrap text-center">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="search-form">
                  <form action="#">
                    <input type="text" placeholder="Enter your keyword..." />
                    <button class="search-btn">
                      <i class="flaticon-search"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="search-backdrop"></div>
      <!-- header-search-end -->

      <!-- offCanvas-start -->
      <div class="offCanvas-wrap">
        <div class="offCanvas-toggle">
          <img src="assets/img/icons/close.png" alt="icon" />
        </div>
        <div class="offCanvas-body">
          <div class="offCanvas-content">
            <h3 class="title">
              Getting all of the <span>Nutrients</span> you need simply cannot
              be done without supplements.
            </h3>
            <p>
              Nam libero tempore, cum soluta nobis eligendi cumque quod placeat
              facere possimus assumenda omnis dolor repellendu sautem temporibus
              officiis
            </p>
          </div>
          <div class="offcanvas-contact">
            <h4 class="number">+9180000000</h4>
            <h4 class="email">SSAGRIQULTURE@GMAIL.com</h4>
            <p>
              Mumbai, <br />
              Mumbai, India.
            </p>
            <ul class="offcanvas-social list-wrap">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="offCanvas-overlay"></div>
      <!-- offCanvas-end -->
    </header>
    

    <div style="background-image: url('images/img/pimg.jpg');">
   

        <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
            <div style="background: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
                <center><h2>Login to your account</h2></center>
                <!-- <span style="color:red;"><?php echo $message; ?></span> -->
                <!-- <span style="color:green;"><?php echo $success; ?></span> -->
                <form action="" method="post">
                    <input type="text" placeholder="Username" name="username"
                        style="width: calc(100% - 20px); padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" />
                    <input type="password" placeholder="Password" name="password"
                        style="width: calc(100% - 20px); padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" />
                    <input type="submit" id="buttn" name="submit" value="Login"
                        style="width: 100%; padding: 10px; border: none; border-radius: 4px; background-color: #5c4ac7; color: #fff; cursor: pointer;" />
                </form>
            </div>
            <div style="text-align: center; margin-top: 15px; color: #888;">
                Not registered? <a href="registration.php" style="color:#5c4ac7; text-decoration: none;">Create an account</a>
            </div>
        </div>
    </div>
</body>

<br><br><br><br><br><br><br><br><br><br><br>
<?php include "footer.php" ?>

  </body>
</html>