<?php
include("includes/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  
{
	header('location:login.php');
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
    </div>
    Pre-loader-end -->
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

    <style type="text/css" rel="stylesheet">
    .indent-small {
        margin-left: 5px;
    }

    .form-group.internal {
        margin-bottom: 0;
    }

    .dialog-panel {
        margin: 10px;
    }

    .datepicker-dropdown {
        z-index: 200 !important;
    }

    .panel-body {
        background: #e5e5e5;
        /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
        /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
        /* IE10+ */
        background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
        /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
        font: 600 15px "Open Sans", Arial, sans-serif;
    }

    label.control-label {
        font-weight: 600;
        color: #777;
    }

    /* 
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin: auto;
	
	}

/* Zebra striping */
    /* tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #404040; 
	color: white; 
	font-weight: bold; 
	
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 14px;
	
	} */
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        /* table { 
	  	width: 100%; 
	}

	
	table, thead, tbody, th, td, tr { 
		display: block; 
	} */


        /* thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; } */

        /* td { 
		
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		
		position: absolute;
	
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	} */

    }
    </style>

</head>

<body>


   
    <div class="page-wrapper">



        <div class="inner-page-hero bg-image" data-image-src="images/img/pimg.jpg">
            <div class="container"> </div>

        </div>
        <div class="result-show">
            <div class="container">
                <div class="row">


                </div>
            </div>
        </div>

        <div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query_res = mysqli_query($conn, "SELECT * FROM users_orders WHERE u_id='".$_SESSION['user_id']."'");
                    if (!mysqli_num_rows($query_res) > 0) {
                        echo '<td colspan="7"><center>You have No orders Placed yet.</center></td>';
                    } else {
                        while ($row = mysqli_fetch_array($query_res)) {
                ?>
                <tr>
                    <td data-column="Order ID"><?php echo $row['razorpay_order_id']; ?></td>
                    <td data-column="Item"><?php echo $row['title']; ?></td>
                    <td data-column="Quantity"><?php echo $row['quantity']; ?></td>
                    <td data-column="Price">$<?php echo $row['price']; ?></td>
                    <td data-column="Status">
                        <?php 
                            $status = $row['status'];
                            if ($status == "" or $status == "NULL") {
                        ?>
                        <button type="button" class="btn btn-info"><span class="fa fa-bars" aria-hidden="true"></span> Dispatch</button>
                        <?php 
                            }
                            if ($status == "in process") { ?>
                        <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin" aria-hidden="true"></span> On The Way!</button>
                        <?php
                            }
                            if ($status == "closed") {
                        ?>
                        <button type="button" class="btn btn-success"><span class="fa fa-check-circle" aria-hidden="true"></span> Delivered</button>
                        <?php 
                            } 
                        ?>
                        <?php
                            if ($status == "rejected") {
                        ?>
                        <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-close"></i> Cancelled</button>
                        <?php 
                            } 
                        ?>
                    </td>
                    <td data-column="Date"><?php echo date('Y-m-d H:i:s', strtotime($row['order_date'])); ?></td>
                    <td data-column="Action">
                        <a href="delete_orders.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>


                    </div>



                </div>
            </div>
    </div>
    </section>



    </div>



    <br><br><br><br><br><br><br><br><br><br><br>
    <footer class="footer-area">
      <div class="footer-instagram">
        <div class="container">
          <div class="row g-0 instagram-active">
            <div class="col-2">
              <div class="footer-insta-item">
                <a
                  href="assets/img/others/instagram_post01.png"
                  class="popup-image"
                  ><img src="assets/img/others/instagram_post01.png" alt="img"
                /></a>
              </div>
            </div>
            <div class="col-2">
              <div class="footer-insta-item">
                <a
                  href="assets/img/others/instagram_post02.png"
                  class="popup-image"
                  ><img src="assets/img/others/instagram_post02.png" alt="img"
                /></a>
              </div>
            </div>
            <div class="col-2">
              <div class="footer-insta-item">
                <a
                  href="assets/img/others/instagram_post03.png"
                  class="popup-image"
                  ><img src="assets/img/others/instagram_post03.png" alt="img"
                /></a>
              </div>
            </div>
            <div class="col-2">
              <div class="footer-insta-item">
                <a
                  href="assets/img/others/instagram_post04.png"
                  class="popup-image"
                  ><img src="assets/img/others/instagram_post04.png" alt="img"
                /></a>
              </div>
            </div>
            <div class="col-2">
              <div class="footer-insta-item">
                <a
                  href="assets/img/others/instagram_post05.png"
                  class="popup-image"
                  ><img src="assets/img/others/instagram_post05.png" alt="img"
                /></a>
              </div>
            </div>
            <div class="col-2">
              <div class="footer-insta-item">
                <a
                  href="assets/img/others/instagram_post06.png"
                  class="popup-image"
                  ><img src="assets/img/others/instagram_post06.png" alt="img"
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-top-wrap">
        <div class="container">
          <div class="footer-widgets-wrap">
            <div class="row">
              <div class="col-lg-4 col-md-7">
                <div class="footer-widget">
                  <div class="footer-about">
                    <div class="footer-logo logo">
                      <a href="index.html"
                        ><img src="assets/img/logo/white_logo.png" alt="Logo"
                      /></a>
                    </div>
                    <div class="footer-text">
                      <p>
                        Promoting accessible and sustainable indoor gardening.
Exceptional customer experiences while contributing positively to the global ecosystem.
                      </p>
                    </div>
                    <div class="footer-social">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram-p"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-6">
                <div class="footer-widget">
                  <h4 class="fw-title">About Us</h4>
                  <ul class="list-wrap">
                    <li><a href="#">About Company</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                    <li><a href="shop.html">Our Shop</a></li>
                    <li><a href="#">Price & Plans</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-5 col-sm-6">
                <div class="footer-widget">
                  <h4 class="fw-title">Support</h4>
                  <ul class="list-wrap">
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="footer-widget">
                  <h4 class="fw-title">CONTACT US</h4>
                  <div class="footer-contact-wrap">
                    <p>Thane, Mumbai , India 400601</p>
                    <ul class="list-wrap">
                      <li class="phone">
                        <i class="fas fa-phone"></i> +918076406706
                      </li>
                      <li class="mail">
                        <i class="fas fa-envelope"></i> info.agriqulture@gmail.com
                      </li>
                      <li class="website">
                        <i class="fas fa-globe"></i> www.SSAgriqulture.com
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-shape one">
          <img
            src="assets/img/others/footer_shape01.png"
            alt="img"
            class="wow fadeInLeft"
            data-wow-delay=".3s"
            data-wow-duration="1s"
          />
        </div>
        <div class="footer-shape two">
          <img
            src="assets/img/others/footer_shape02.png"
            alt="img"
            class="wow fadeInRight"
            data-wow-delay=".3s"
            data-wow-duration="1s"
          />
        </div>
      </div>
      <div class="copyright-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <div class="copyright-text">
                <p>Copyright © 2023 SS Agriqulture All Rights Reserved.</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="payment-card text-center text-md-end">
                <img src="assets/img/others/card_img.png" alt="card" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer-area-end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/validator.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/newfe.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

  </body>
<html> 