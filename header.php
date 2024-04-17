<?php
session_start(); 
include 'includes/connect.php';

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
      href="assets/img/logo/white_logo.png"
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
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    
  </head>
  <body>
    <!-- Pre-loader-start -->
   <div id="preloader">
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
                    <a href="index.php"
                      ><img src="assets/img/logo/logo.png" alt="Logo"
                    /></a>
                  </div>
                  <div class="navbar-wrap main-menu d-none d-xl-flex">
                    <ul class="navigation">
                      <li class="active menu-item-has-children">
                        <a href="index.php" class="section-link">Home</a>
                        <ul class="sub-menu">
                          
                          </li>
                          <li><a href="index-2.html"></a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="cultivator.php?res_id=14" class="section-link">Cultivator</a>
                      </li>
                      <li>
                        <a href="index.php#SeedPatches" class="section-link"
                          >Seed Patches</a
                        >
                        <li>
                        <a href="liveMicrogreens.php?res_id=13" class="section-link">Live Microgreens</a>
                      </li>
                      </li>
                      <li>
                        <a href="whymicrogreens.php" class="section-link">Microgreens</a>
                      </li>
                      <li class="menu-item-has-children">
                        <ul class="menu">
                          <!--<li><a href="blogs.php">Blog</a></li>-->
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                      <li class="menu">
                      <li><a href="contact.php">contacts</a></li>
                      
                      <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
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
    <style>
   
   .color-box {
      
       top: calc(100% - 10px); 
       right: 0;
       width: 51px; 
       height: 51px; 
       background-color: #FCF9DA;
       margin-left: -93px;
   
   }
     
   .colorr-box {
      
      top: calc(100% - 10px);
      right: 0;
      width: 51px; /* Adjust the width of the box */
      height: 51px; /* Adjust the height of the box */
      background-color: #00BD6A; /* Choose your desired color */
      margin-left: -93px;
   
   }
   
   #sticky-header {
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       z-index: 1000; 
       background-color: #fff; 
       box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
       animation: slideDown 0.5s ease; /* Apply animation to the sticky header */
   }
   
   @keyframes slideDown {
       from {
           transform: translateY(-100%); /* Start from above the viewport */
       }
       to {
           transform: translateY(0); /* Move to the top of the viewport */
       }
   }
   
   #sticky-header .logo {
       margin-left: 20px;
   }
   
   #sticky-header .navigation {
       margin-right: 20px; 
   }
   
   #sticky-header .navigation .active {
       /* Define styles for active navigation items */
   }
   
   #sticky-header .dropdown-menu {
       /* Define styles for dropdown menu */
   }
   
         </style>
         <style>
       * {
     box-sizing: border-box;
   }
   
   #cart-indicator {
     position: fixed;
     right: 0;
     bottom: 40px;
     display: flex;
     flex-direction: column;
     text-align: center;
   }
   #cart-indicator button {
     display: flex;
     flex-direction: row;
     justify-content: center;
     align-items: center;
     background-color: rgba(0,0,0,1);
     border: 3px solid #fff;
     font-weight: bold;
     font-family: helvetica, arial, sans-serif;
     color: #fff;
     padding: 12px 24px 12px 18px;
     border-radius: 50px;
     margin: 0;
     font-size: 1.2rem;
     text-shadow: 1px 1px 5px #000;
     animation-name: button-pulse;
     animation-duration: 2s;
     animation-iteration-count: infinite;
     cursor: pointer;
   }
   
   #cart-indicator button::before {
     content: "";
     position: relative;
     top: 0;
     left: 0;
     margin-right: -12px;
     display: inline-block;
     width: 2.5rem;
     height: 2.5rem;
     --svg: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23000' d='M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z'/%3E%3C/svg%3E");
     background-color: currentColor;
     -webkit-mask-image: var(--svg);
     mask-image: var(--svg);
     -webkit-mask-repeat: no-repeat;
     mask-repeat: no-repeat;
     -webkit-mask-size: 100% 100%;
     mask-size: 100% 100%;
   }
   
   #cart-indicator .item-count {
     display: inline-block;
     width: auto;
     min-width: 1.25rem;
     aspect-ratio: 1 / 1;
     position: relative;
     /*margin-right: 12px;*/
     top: 0.75rem;
     left: -0.5rem;
     font-size: 0.85rem;
     background-color: rgba(255,75,150,1);
     border-radius: 50em;
     padding-top: 1.5%;
   }
   
   
   
   #cart-indicator button:hover::before {
     animation-name: bag-shake;
     animation-duration: 1s;
     animation-iteration-count: 1;
   }
   
   @keyframes button-pulse {
     0%   {transform: scale(1);}
     25%  {transform: scale(1.05);}
     50%  {transform: scale(1.05);}
     75%  {transform: scale(1);}
     100% {transform: scale(1);}
   }
   
   @keyframes bag-shake {
     0%   {transform: rotate(0deg);}
     10%  {transform: rotate(25deg);}
     20%  {transform: rotate(-25deg);}
     30%  {transform: rotate(25deg);}
     40%  {transform: rotate(-25deg);}
     75%  {transform: rotate(0deg);}
     100% {transform: rotate(0deg);}
   }
   
       </style>
