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
    
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
    </button>
    
    <header id="home">
      <div id="header-top-fixed"></div>
      <div id="sticky-header" class="menu-area" style="#sticky-header {
    background-color: #fff; /* Add a background color */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
};
    background-color: #fff; /* Add a background color */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
">
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
                        <a href="#home" class="section-link">Home</a>
                        <ul class="sub-menu">
                          
                          </li>
                          <li><a href="index-2.html"></a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="cultivator.php?res_id=14" class="section-link">Cultivator</a>
                      </li>
                      <li>
                        <a href="#seedpatches" class="section-link"
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
            </div>
          </div>
        </div>
      </div>

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
    </header>
    


    <!-- header-area-end -->

    <!-- main-area -->
    <main class="main-area fix">
      <!-- banner-area -->
      <section class="banner-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-7 col-lg-8 col-md-10">
              <div class="banner-content text-center">
                <h2 class="title" style="
    font-family: arapey;
    text-transform: none;
    font-weight: normal;
        margin-top: 135px;
">Grow Your Health</h2>
               <p class="banner-caption" style="font-size: 34px;font-family: Helvetica Now;color: black;text-transform: none;font-weight: normal;font-style: italic;">Enhance Health with Nutrient-Packed Superfoods</p>
                <a href="" class="btn btn-two">Discover Microgreen Magic</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="banner-images text-center">
                <img
                  src="assets/img/banner/banner_img01.png"
                  alt="img"
                  class="main-img"
                />
                <img
                  src="assets/img/banner/banner_round_bg.png"
                  alt="img"
                  class="bg-shape"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="banner-shape one">
          <img
            src="assets/img/banner/banner_shape01.png"
            alt="shape"
            class="wow bannerFadeInLeft"
            data-wow-delay=".2s"
            data-wow-duration="2s"
          />
        </div>
        <div class="banner-shape two">
          <img
            src="assets/img/banner/banner_shape02.png"
            alt="shape"
            class="wow bannerFadeInRight"
            data-wow-delay=".2s"
            data-wow-duration="2s"
          />
        </div>
        <div class="banner-shape three">
          <img
            src="assets/img/banner/shape03.png"
            alt="shape"
            class="wow bannerFadeInDown"
            data-wow-delay=".2s"
            data-wow-duration="2s"
          />
        </div>
        <div class="banner-shape four">
          <img
            src="assets/img/banner/shape04.png"
            alt="shape"
            class="wow bannerFadeInDown"
            data-wow-delay=".2s"
            data-wow-duration="2s"
            
          />
        </div>
      </section>
      <div class="custom-popup" id="custom-popup" style="position: fixed;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 0; /* Reset padding */
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      max-width: 100%;
      z-index: 9999;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
      display: none;
      background-image: url(assets/img/others/newsletter.jpg);
      height:20%;">
      <span class="custom-close-btn" onclick="closeCustomPopup()" style="position: absolute;
          top: 10px;
          right: 10px;
          font-size: 24px;
          cursor: pointer;">&times;</span>
      <div class="popup-content" style="display: flex;
          flex-wrap: wrap;">
          <div class="popup-details" style="flex: 2;
              padding: 20px;padding: 35px;">
              <center><h2>Subscribe to Our Newsletter</h2></center>
              <input type="email" placeholder="Enter your email address" id="custom-email" required style="width: 100%;
                  padding: 10px;
                  margin-bottom: 10px;
                  border: 1px solid #ccc;
                  border-radius: 4px;">
              <center>
                  <button class="custom-button" onclick="subscribeCustom()" style="background-color: #4caf50;
                      color: white;
                      padding: 10px 20px;
                      border: none;
                      border-radius: 4px;
                      cursor: pointer;">Subscribe</button>
              </center>
          </div>
      </div>
  </div>
  

 
  <script>
    function closeCustomPopup() {
      var popup = document.getElementById('custom-popup');
      popup.style.opacity = '0';
      setTimeout(function () {
          popup.style.display = 'none';
      }, 500); // Set the display to none after the animation duration (500 milliseconds)
  }

  function subscribeCustom() {
      var emailInput = document.getElementById('custom-email');
      var email = emailInput.value;

      // Validate email address (you can add more validation if needed)
      if (email) {
          // For demonstration purposes, assume subscription is successful
          // You can replace this with your actual subscription logic
          var subscriptionSuccess = true;

          if (subscriptionSuccess) {
              // Create a Bootstrap success alert dynamically
              var alertDiv = document.createElement('div');
              alertDiv.className = 'alert alert-success alert-dismissible fade show';
              alertDiv.role = 'alert';
              alertDiv.innerHTML = 'Subscription successful! Thank you for subscribing to our newsletter.';
              // Add close button to the alert
              alertDiv.innerHTML += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

              // Append the alert to the popup
              var popup = document.getElementById('custom-popup');
              popup.appendChild(alertDiv);

              // Close the popup after subscribing (you can customize this behavior)
              setTimeout(function () {
                  closeCustomPopup();
              }, 2000); // Automatically close the popup after 5 seconds
          } else {
              console.log('Subscription failed. Please try again later.');
          }
      } else {
          console.log('Invalid email address');
      }
  }

  // Function to show the popup with animation
  function showPopupWithAnimation() {
      var popup = document.getElementById('custom-popup');
      popup.style.display = 'block'; // Set display to block
      setTimeout(function () {
          popup.style.opacity = '1'; // Set opacity to 1 to trigger the fade-in animation
      }, 100); // Set the delay before the animation starts (100 milliseconds)
  }

  // Call the showPopupWithAnimation function after 10 seconds (10000 milliseconds)
  setTimeout(function () {
      showPopupWithAnimation();
  }, 10000);
</script>
      <!-- banner-area-end -->
      <!-- brand-area -->
      <div class="brand-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="brand-title text-center mb-50">
                <p class="title">Supported by</p>
              </div>
            </div>
          </div>
          <div class="row brand-active">
          <div class="col-2">
              <div class="brand-item">
                <a href="#"
                  ><img src="assets/img/brand/brand_01.png" alt="brand" style="
    width: 73%;
"></a>
              </div>
            </div>
            <div class="col-2">
              <div class="brand-item">
                <a href="#"
                  ><img src="assets/img/brand/brand_02.jpeg" alt="brand" style="
    width: 100%;
"></a>
              </div>
            </div>
            <div class="col-2">
              <div class="brand-item">
                <a href="#"
                  ><img src="assets/img/brand/brand_03.png" alt="brand" style="
    width: 110%;
"></a>
              </div>
            </div>
            <div class="col-2">
              <div class="brand-item">
                <a href="#"
                  ><img src="assets/img/brand/brand_044.png" alt="brand" style="
    width: 89%;
"></a>
              </div>
            </div>
            <div class="col-2">
              <div class="brand-item">
                <a href="#"
                  ><img src="assets/img/brand/brand_055.png" alt="brand" style="
    width: 100%;
"></a>
              </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    
      <!-- brand-area-end -->

      <!-- features-area -->
      <section
        id="features"
        class="features-area features-bg"
        data-background="assets/img/bg/features_bg.jpg"
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xxl-6 col-lg-5 order-0 order-lg-2">
              <div
                class="features-img wow featuresRollOut"
                data-wow-delay=".3s"
              >
              <img src="assets/img/others/image1.png" alt="" style="
    width: 100%;
">
              </div>
            </div>
            <div class="col-xxl-6 col-lg-7">
              <div class="features-items-wrap">
                <div class="row justify-content-center">
                  <div class="col-md-6 col-sm-8">
                    <div class="features-item">
                      <div class="features-icon">
                        <i class="flaticon-tape-measure"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="title">Antioxidant-rich, immune-boosting
</h4>
                        <p>
                          
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-8">
                    <div class="features-item">
                      <div class="features-icon">
                        <i class="flaticon-test"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="title">Flavorful health in leaves
</h4>
                        <p>
                          
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-8">
                    <div class="features-item">
                      <div class="features-icon">
                        <i class="flaticon-weight"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="title">Immune-boosting properties
</h4>
                        <p>
                          
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-8">
                    <div class="features-item">
                      <div class="features-icon">
                        <i class="flaticon-abs"></i>
                      </div>
                      <div class="features-content">
                        <h4 class="title">Supports Your Gut health</h4>
                        <p>
                         
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <style>
       
        .main-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .section-container {
            padding: 20px;
        }

        .inner-container {
            margin: 0 20px; /* Adjusted margin */
        }

        .custom-box {
            background-color: azure;
            border-radius: 50px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .custom-box i {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .custom-box h3 {
            margin-bottom: 10px;
        }

        .custom-box p {
            line-height: 1.5;
        }

        .custom-heading {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333; /* Dark gray */
        }

        .custom-heading span {
            display: block; /* Make each word a block element */
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 600px) {
            .main-container {
                grid-template-columns: 1fr; /* Change to single column layout */
            }

            .section-container {
                order: 2; /* Natural section appears after Synthetic section */
            }
        }
    </style>
      <div style="text-align: center; font-size: 55px; margin-bottom: 20px; font-weight: bold; color: #333;margin-top:50px;color:black;">
    <span>WHY</span>
    <span>MICROGREENS ?</span>
</div><center><span style="
    font-size: 36px;
    color: black;
    font-family: garet;
    font-style: bold;
">  Discover the incredible goodness of microgreens – tiny plants with big flavor and even bigger health benefits! </span></center>

<center>
<div class="main-container">
    <div class="section-container">
        <h2>Natural</h2>
        <div class="inner-container">
            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
               <img src="1.png" alt="Image description">
                <i class="fas fa-check-circle check" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Liver Detox</h3>
                <p style="line-height: 1.5;"> Supports liver function and detoxification.</p>
            </div>

            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="2.png" alt="Image description">
                <i class="fas fa-check-circle check" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Increases DIGESTIBILITY</h3>
                <p style="line-height: 1.5;">Supports a balanced and thriving gut microbiome.</p>
            </div>

            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="3.png" alt="Image description">
                <i class="fas fa-check-circle check" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Energy Boost</h3>
                <p style="line-height: 1.5;">Provides a natural energy lift.</p>
            </div>

            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="4.png" alt="Image description">
                <i class="fas fa-check-circle check" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Weight Management</h3>
                <p style="line-height: 1.5;">Aids in maintaining a healthy weight.</p>
            </div>
        </div>
    </div>

    <div class="section-container">
        <h2>Synthetic</h2>
        <div class="inner-container">
            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="5.png" alt="Image description">
                <i class="fas fa-times-circle cross" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Antioxidant Powerhouse</h3>
                <p style="line-height: 1.5;">Fights free radicals to prevent cell damage.</p>
            </div>

            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="6.png" alt="Image description">
                <i class="fas fa-times-circle cross" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Detoxifying Delights</h3>
                <p style="line-height: 1.5;">Cleanses the body of toxins.</p>
            </div>

            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="7.png" alt="Image description">
                <i class="fas fa-times-circle cross" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Skin Glow</h3>
                <p style="line-height: 1.5;">Nourishes skin for a radiant complexion.</p>
            </div>

            <div class="custom-box" style="background-color: azure; border-radius: 50px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <img src="8.png" alt="Image description">
                <i class="fas fa-times-circle cross" style="font-size: 48px; margin-bottom: 15px;"></i>
                <h3 style="margin-bottom: 10px;">Anti-inflammatory</h3>
                <p style="line-height: 1.5;">Reduces inflammation in the body.</p>
            </div>
        </div>
    </div>
</div>
</center>
            <!-- Ingredients-area -->
            <section id="ingredient" class="ingredients-area">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-7">
        <div class="ingredients-img">
          <img src="assets/img/others/kert1234.png" alt="img" style="width:100%">
        </div>
      </div>
      <div class="col-xl-7 col-lg-9">
        <div class="ingredients-items-wrap" style="
          @media only screen and (max-width: 450px) {
            padding: 0 20px; /* Adjust as needed */
          }
        ">
          <div class="section-title mb-60">
            <p class="sub-title"></p>
            <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none; font-size:75px;font-weight: bold;margin-left: 80px;">Start growing</h2>
            <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif ;text-transform: none;font-size:75px;font-weight: bold;margin-left: 80px;">your <span style="color: green;">own</span></h2>
            <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size:75px; font-weight: bold;margin-left: 80px;">Microgreens</h2>
            <p class="kert" style="font-family: 'IBM Plex Sans', sans-serif ;text-transform: none;font-size:20px;font-weight: bold;"></p>
            <p style="color: black;margin-left:90px;font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size: 30px;margin-top: 60px;
              @media only screen and (max-width: 450px) {
                font-size: 20px; /* Adjust font size */
                margin-left: 40px; /* Adjust margin */
              }
            ">KERT is a savvy device that <br>
            automatically grows Microgreens for <br>
            you in just 5-8 days, 
            <br>
            also including a variety of species<br>that you can hardly imagine growing<br>it at home.
            </p>
          </div>
          <a href="cultivator.php?res_id=14" class="btn btn-two" style="
            margin-left: 80px;
            @media only screen and (max-width: 450px) {
              margin-left: 40px; /* Adjust margin */
            }
          ">Know More</a>
          <div class="row justify-content-center justify-content-lg-start"></div>
        </div>
      </div>
    </div>
  </div>
</section>

            <!-- Ingredients-area-end -->
      
<!-- We Need to insert the comparision -->
            <section
              class="formula-area formula-bg"
              data-background="assets/img/bg/formula_bg.jpg"
            >
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 order-0 order-lg-2">
                    <div class="formula-img">
                      <img src="assets/img/others/formula_img1.png" alt="img" /> 
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="formula-content">
                      <div class="section-title white-title mb-50">
                        <p class="sub-title"></p>
                        <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif ;text-transform: none;font-size:65px;font-weight: bold;"><span style="color: black;">Start eating</span></h2>
                        <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif ;text-transform: none;font-size:65px;font-weight: bold;">our </h2>
                        <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif ;text-transform: none;font-size:65px;font-weight: bold;"><span style="color: black;">Microgreens</span></h2>

                        
                      </div>
                      <ul class="formula-list list-wrap">
                        <p style="font-size:35px;color:white;">Our Microgreens Combos, are on the go or perfect if you just want<br> quick 
nutrition fix.<br>
Buy...Open...Sprinkle.</p>
                       
                      </ul>
                      <a href="liveMicrogreens.php?res_id=13" class="btn btn-two">Know More</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
<!-- We Need to insert the comparision -->
      <!-- features-product -->
      <section id="seedpatches" class="features-products">
        <div class="container">
                <div class="row align-items-center justify-content-center">                  
                  <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="ingredients-img">
                      
                      
                    <div class="ingredients-items-wrap">
                      <div class="section-title mb-60">
                        <p class="sub-title"></p>
                        <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none; font-size:70px;font-weight: bold;">Magical Seed Patches</h2>
<p class="kert" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size: 33px;color: black;margin-top: 112px;">Our Seed Patches are just unbelievable! Made from agricultural waste,full of natural plant nutrients and is Self-Sufficient Growing Material.<br>

Just Place...Wet It..<br>
And <br>
See the Greens Boom</p>
                      </div>
                      <div class="row justify-content-center justify-content-lg-start">
                         
                          </div>
                        </div></div>
                  </div>
                  <div class="col-xl-7 col-lg-9"> 
                    
                  <img src="assets/img/others/seedpatch.png" alt="img" style="width: 100%; max-width: 450px; margin-left: auto; margin-right: auto;">

</div>
                    </div>
                  </div>
                
              
        
      <!-- shop-area -->
      <!-- <section class="home-shop-area">
        <div class="container">
          <div class="row home-shop-active">
            <div class="col-xl-3">
              <div class="home-shop-item">
                <div class="home-shop-thumb">
                  <a href="shop-details.html">
                    <img
                      src="assets/img/products/home_shop_thumb01.png"
                      alt="img"
                    />
                    <span class="discount"> -15%</span>
                  </a>
                  <div class="shop-thumb-shape"></div>
                </div>
                <div class="home-shop-content">
                  <h4 class="title">
                    <a href="shop-details.html">Comming Soon....</a>
                  </h4>
                  <span class="home-shop-price">$85.99</span>
                  <div class="home-shop-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="total-rating">(30)</span>
                  </div>
                  <div class="shop-content-bottom">
                    <a href="#" class="cart"
                      ><i class="flaticon-shopping-cart-1"></i
                    ></a>
                    <a href="#" class="btn btn-two">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="home-shop-item">
                <div class="home-shop-thumb">
                  <a href="shop-details.html">
                    <img
                      src="assets/img/products/home_shop_thumb02.png"
                      alt="img"
                    />
                  </a>
                  <div class="shop-thumb-shape yellow"></div>
                </div>
                <div class="home-shop-content">
                  <h4 class="title">
                    <a href="shop-details.html">Comming Soon....</a>
                  </h4>
                  <span class="home-shop-price">$55.99</span>
                  <div class="home-shop-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="total-rating">(30)</span>
                  </div>
                  <div class="shop-content-bottom">
                    <a href="#" class="cart"
                      ><i class="flaticon-shopping-cart-1"></i
                    ></a>
                    <a href="#" class="btn btn-two">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="home-shop-item">
                <div class="home-shop-thumb">
                  <a href="shop-details.html">
                    <img
                      src="assets/img/products/home_shop_thumb03.png"
                      alt="img"
                    />
                    <span class="discount"> -15%</span>
                  </a>
                  <div class="shop-thumb-shape purple"></div>
                </div>
                <div class="home-shop-content">
                  <h4 class="title">
                    <a href="shop-details.html">Comming Soon....</a>
                  </h4>
                  <span class="home-shop-price">$79.99</span>
                  <div class="home-shop-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="total-rating">(24)</span>
                  </div>
                  <div class="shop-content-bottom">
                    <a href="#" class="cart"
                      ><i class="flaticon-shopping-cart-1"></i
                    ></a>
                    <a href="#" class="btn btn-two">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="home-shop-item">
                <div class="home-shop-thumb">
                  <a href="shop-details.html">
                    <img
                      src="assets/img/products/home_shop_thumb04.png"
                      alt="img"
                    />
                  </a>
                  <div class="shop-thumb-shape gray"></div>
                </div>
                <div class="home-shop-content">
                  <h4 class="title">
                    <a href="shop-details.html">Comming Soon...</a>
                  </h4>
                  <span class="home-shop-price">$79.99</span>
                  <div class="home-shop-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="total-rating">(24)</span>
                  </div>
                  <div class="shop-content-bottom">
                    <a href="#" class="cart"
                      ><i class="flaticon-shopping-cart-1"></i
                    ></a>
                    <a href="#" class="btn btn-two">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="home-shop-item">
                <div class="home-shop-thumb">
                  <a href="shop-details.html">
                    <img
                      src="assets/img/products/home_shop_thumb05.png"
                      alt="img"
                    />
                  </a>
                  <div class="shop-thumb-shape blue"></div>
                </div>
                <div class="home-shop-content">
                  <h4 class="title">
                    <a href="shop-details.html">Comming Soon...</a>
                  </h4>
                  <span class="home-shop-price">$39.99</span>
                  <div class="home-shop-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="total-rating">(12)</span>
                  </div>
                  <div class="shop-content-bottom">
                    <a href="#" class="cart"
                      ><i class="flaticon-shopping-cart-1"></i
                    ></a>
                    <a href="#" class="btn btn-two">Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      shop-area-end -->
      <section class="formula-area formula-bg" data-background="assets/img/bg/formula_bg.jpg" style="background-image: url(&quot;assets/img/bg/formula_bg.jpg&quot;);">

            <!-- blog-post-area -->                                     <center>  <p class="sub-title"style="
    margin-bottom: 65px;
    color: #faa432;
    font-family: 'IBM Plex Sans';
    font-size: 30px;
">.. ASK QUESTIONS ..</p></center>


            <section id="news" class="blog-post-area">
              <div class="container" style="margin-top: -190px;">
                <div class="blog-inner-wrapper">
                  <div class="row justify-content-center">
                  <div class="col-lg-6 col-md-10">
                      <div class="blog-posts-wrapper">
                        <div class="section-title mb-50">
                          <h2 class="title" style="
    font-family: open sans condensed;
    color: white;
    text-transform: none;
    font-size: 85px;
">Why us ?</h2>
                        </div>
                        <h2 class="title" style="color: white;font-family: open sans condensed;text-transform: none;"> Try Us.</h2><br>
                        <h2 class="title" style="color: white;font-family: open sans condensed;text-transform: none;"> Trust Us.</h2><br>                        <h2 class="title" style="color: white;font-family: open sans condensed;text-transform: none;"> See Results.</h2><br>

                        <br><br><br><h2 class="title" style="color: white;font-family: ibm plex sans;text-transform: none;    font-size: 32px;
"> Magical</h2><br>
                        <h2 class="title" style="color: white;font-family: ibm plex sans;text-transform: none;    font-size: 32px;
"> Affordable</h2><br>
                        <h2 class="title" style="color: white;font-family: ibm plex sans;text-transform: none;    font-size: 32px;
"> Just Sprinkle
</h2><br>
                        <h2 class="title" style="color: white;font-family: ibm plex sans;text-transform: none;    font-size: 32px;
"> Do Nothing</h2>

                      </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                    <div section id="faq">
                      <div class="faq-wrapper">
                        <div class="section-title mb-50">
                          <h2 class="title" style="
    font-family: OPEN SANS CONDENSED;
">Get Every Answers</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item active-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                              >
                                <span class="count">01.</span> Why is ingarden better?
                              </button>
                            </h2>
                            <div
                              id="collapseOne"
                              class="accordion-collapse collapse show"
                              aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="accordion-body">
                                We specifically designed our growing kit to be best-in-class. Successfully growing microgreens requires specific environmental conditions with little room for error. Our patented, cutting-edge technology curates these growing requirements in a simple, streamlined, and automated product.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                              >
                                <span class="count">02.</span>Do microgreens have high levels of antioxidants?
                              </button>
                            </h2>
                            <div
                              id="collapseTwo"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="accordion-body">Yes, microgreens are known for their high antioxidant levels. In fact, they can contain higher concentrations of antioxidants than their mature plant counterparts in some cases.
      
                                A 2012 study published in the Journal of Agricultural and Food Chemistry, for example, found that microgreens like radish and kale contained 4 to 40 times higher levels of certain antioxidants than their mature plant counterparts.
                                
                                Another study published in the Journal of Functional Foods in 2017 found that microgreens like arugula, mustard, and kale contained higher levels of antioxidants than their mature plant counterparts, and that these antioxidants had higher bioavailability, meaning the body could absorb them more easily.
                                
                                Overall, microgreens seem to be a good source of antioxidants that can help protect cells from damage caused by free radicals and reduce the risk of disease.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                              >
                                <span class="count">03.</span> Why are microgreens best for my health?
                              </button>
                            </h2>
                            <div
                              id="collapseThree"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="accordion-body">
                                Microgreens are superfoods—nutrient-rich plants, typically 25 - 38 millimeters high, that contain higher levels of essential vitamins, minerals, phytonutrients, and enzymes than supermarket vegetables - five times more on average.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                              >
                                <span class="count">04.</span> I RECEIVED MY ORDER BUT IT IS MISSING ITEMS OR HAS THE WRONG PARTS.
                              </button>
                            </h2>
                            <div
                              id="collapseFour"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingFour"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="accordion-body">
                                Don't worry, we can help! Please use our Contact Us form to submit any issues with your order and our Customer Service team will promptly assist you. Be sure to provide all necessary information such as the order number and your shipping address.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                              >
                                <span class="count">05.</span> Can I order the seeds separately?
                              </button>
                            </h2>
                            <div
                              id="collapseFive"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingFive"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="accordion-body">
                                Yes, you can. Check out our seeds page to order your favorite plants!
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              </div>

            </section>
      

      <!-- video-area -->
      <!-- <div
        class="video-area video-bg"
        data-background="assets/img/bg/video_bg.jpg"
      >
        <div class="video-bg-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="video-btn">
                <a
                  href="Video Link need to insert"
                  class="popup-video ripple-white"
                  ><i class="fas fa-play"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="video-shape one">
          <img src="assets/img/others/video_shape01.png" alt="shape" />
        </div>
        <div class="video-shape two">
          <img src="assets/img/others/video_shape02.png" alt="shape" />
        </div>
      </div> -->
      <!-- video-area-end -->

      <!-- pricing-area -->
      <!-- <section id="pricing" class="pricing-area gray-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
              <div class="section-title text-center mb-55">
                <p class="sub-title">.. Choose Your Organic Journey ..</p>
                <h2 class="title">Microgreens PACKAGES</h2>
              </div>
            </div>
          </div>
          <div class="pricing-wrap">
            <div class="row align-items-end justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="pricing-item mb-30 regular">
                  <div class="pricing__box text-center">
                    <div class="pricing-hade">
                      <span>1 Device + 1 Growing Pade</span>
                      <h3 class="title">Microgreens</h3>
                      <p>6 Month Warrenty + Free Installation</p>
                    </div>
                    <div class="pricing-img">
                      <img src="assets/img/others/pricing_01.jpg" alt="img" />
                    </div>
                    <div class="pricing-price">
                      <h4 class="price">$69</h4>
                      <span
                        >per <br />
                        Grams</span
                      >
                    </div>
                    <h5 class="total">($69 TOTAL)</h5>
                    <div class="price-savings">
                      <h4 class="save">Save 14%</h4>
                      <span>&nbsp;</span>
                    </div>
                    <div class="pricing-btn mb-15">
                      <a href="contact.php"
                        >Buy Now
                        <span>7 Days Full Money Back Guaranteed</span></a
                      >
                    </div>
                    <div class="bottom-img">
                      <img
                        src="assets/img/others/pricing_bottom_img.png"
                        alt="card"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="pricing-item mb-30 popular-plan">
                  <div class="pricing-title text-center mb-10">
                    <h4 class="title">★ Most Popular ★</h4>
                  </div>
                  <div class="pricing__box text-center">
                    <div class="pricing-hade">
                      <span>1 Device + 1 Growing Pade</span>
                      <h3 class="title">Microgreens</h3>
                      <p>6 Month Warrenty + Free Installation</p>
                    </div>
                    <div class="pricing-img">
                      <img src="assets/img/others/pricing_02.jpg" alt="img" />
                    </div>
                    <div class="pricing-price">
                      <h4 class="price">$59</h4>
                      <span
                        >per <br />
                        Grams</span
                      >
                    </div>
                    <h5 class="total">($179 TOTAL)</h5>
                    <div class="price-savings">
                      <h4 class="save">Save 25%</h4>
                      <span>+ Free Shipping</span>
                    </div>
                    <div class="pricing-btn mb-15">
                      <a href="contact.php"
                        >Buy Now
                        <span>7 Days Full Money Back Guaranteed</span></a
                      >
                    </div>
                    <div class="bottom-img">
                      <img
                        src="assets/img/others/pricing_bottom_img.png"
                        alt="card"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="pricing-item mb-30 best-value-plan">
                  <div class="pricing-title text-center mb-10">
                    <h4 class="title">✓ Best Value</h4>
                  </div>
                  <div class="pricing__box text-center">
                    <div class="pricing-hade">
                      <span>1 Device + 1 Growing Pade</span>
                      <h3 class="title">Microgreens</h3>
                      <p>6 Month Warrenty + Free Installation</p>
                    </div>
                    <div class="pricing-img">
                      <img src="assets/img/others/pricing_03.jpg" alt="img" />
                    </div>
                    <div class="pricing-price">
                      <h4 class="price">$49</h4>
                      <span
                        >per <br />
                        Grams</span
                      >
                    </div>
                    <h5 class="total">($299 TOTAL)</h5>
                    <div class="price-savings">
                      <h4 class="save">Save 40%</h4>
                      <span>+ Free Shipping</span>
                    </div>
                    <div class="pricing-btn mb-15">
                      <a href="contact.php"
                        >Buy Now
                        <span>365 Day Full Money Back Guaranteed</span></a
                      >
                    </div>
                    <div class="bottom-img">
                      <img
                        src="assets/img/others/pricing_bottom_img.png"
                        alt="img"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- pricing-area-end -->

      <!-- testimonial-area -->
    
      </section>
      <!-- testimonial-area-end -->
      <section
        class="testimonial-area testimonial-bg"
        data-background="assets/img/bg/testimonial_bg.jpg"
      >
        <div class="testimonial-overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-9 col-lg-11">
              <div class="testimonial-active">
                <div class="testimonial-item text-center">
                  <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <p>
                    “"I am very happy with my purchase from this website, the plants were healthy and arrived on time.”
                  </p>
                  <div class="testimonial-avatar-wrap">
                    <div class="testi-avatar-img">
                      <img
                        src="assets/img/others/testi_avatar01.jpg"
                        alt="img"
                      />
                    </div>
                    <div class="testi-avatar-info">
                      <h5 class="name">Priyanka</h5>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item text-center">
                  <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <p>
                    "I am very happy with my purchase from this website, the plants were healthy and arrived on time.”
                  </p>
                  <div class="testimonial-avatar-wrap">
                    <div class="testi-avatar-img">
                      <img
                        src="assets/img/others/testi_avatar02.jpg"
                        alt="img"
                      />
                    </div>
                    <div class="testi-avatar-info">
                      <h5 class="name">Jessica</h5>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item text-center">
                  <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <p>
                    "This is the Amazing Healthy Microgreen."
                  </p>
                  <div class="testimonial-avatar-wrap">
                    <div class="testi-avatar-img">
                      <img
                        src="assets/img/others/testi_avatar03.jpg"
                        alt="img"
                      />
                    </div>
                    <div class="testi-avatar-info">
                      <h5 class="name">Tina</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- blog-post-area-end -->
    </main>
    <!-- main-area-end -->
<style>
  @media only screen and (max-width: 450px) {
  .ingredients-items-wrap {
    padding: 0 20px; 
    margin-left:-98px;/* Adjust as needed */
  }
  

  .title {
    font-size: 50px; /* Adjust font size */
    margin-left: 40px; /* Adjust margin */
  }

  .kert {
    font-size: 16px; /* Adjust font size */
  }

  p {
    font-size: 20px; /* Adjust font size */
    margin-left: 60px; /* Adjust margin */
  }

  .btn {
    margin-left: 40px; /* Adjust margin */
  }
}

  </style>
    <?php include "footer.php" ?>

  </body>
</html>