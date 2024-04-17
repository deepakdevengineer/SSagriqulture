<?php
include("includes/connect.php");
error_reporting(0);
session_start();
include_once 'product-action.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['res_id']) && isset($_GET['action']) && $_GET['action'] == 'add') {
    // Process form data and add item to cart
    $productId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
    $quantity = isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : '';

    if (!empty($quantity)) {
        $stmt = $conn->prepare("SELECT * FROM product where d_id= ?");
        $stmt->bind_param('i', $productId);
        $stmt->execute();
        $productDetails = $stmt->get_result()->fetch_object();
        $itemArray = array($productDetails->d_id => array('title' => $productDetails->title, 'd_id' => $productDetails->d_id, 'quantity' => $quantity, 'price' => $productDetails->price));

        if (!empty($_SESSION["cart_item"])) {
            if (in_array($productDetails->d_id, array_keys($_SESSION["cart_item"]))) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($productDetails->d_id == $k) {
                        if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                        }
                        $_SESSION["cart_item"][$k]["quantity"] += $quantity;
                    }
                }
            } else {
                $_SESSION["cart_item"] = $_SESSION["cart_item"] + $itemArray;
            }
        } else {
            $_SESSION["cart_item"] = $itemArray;
        }

        // Redirect to the sample 1 page to avoid resubmission
        header("Location: cultivator.php?res_id=" . $_GET['res_id']);
        exit();
    }
}

?>
<?php include "header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample 1</title>
    
</head>
<body>
    <!-- Checkout button -->
    <div class="sticky-checkout">
        <button onclick="toggleCart()">Checkout</button>
    </div>

    <!-- Cart popup -->
    <div class="cart-popup" id="cartPopup">
        <span class="close-btn" onclick="toggleCart()">X</span>
        <h3>Your Cart</h3>
        <div class="widget-body">
            <?php
            // Display cart items here
            $item_total = 0;
            foreach ($_SESSION["cart_item"] as $item) {
                ?>
                <div class="title-row">
                    <?php echo $item["title"]; ?>
                    <a href="cultivator.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>">
                        <i class="fa fa-trash pull-right"></i>
                    </a>
                </div>
                <div class="form-group row no-gutter">
                    <div class="col-xs-8">
                        <input type="text" class="form-control b-r-0" value="<?php echo "$" . $item["price"]; ?>" readonly id="exampleSelect1">
                    </div>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" readonly value="<?php echo $item["quantity"]; ?>" id="example-number-input">
                    </div>
                </div>
                <?php
                $item_total += ($item["price"] * $item["quantity"]);
            }
            ?>
        </div>
        <div class="price-wrap text-xs-center">
            <p>TOTAL</p>
            <h3 class="value"><strong><?php echo "$" . $item_total; ?></strong></h3>
            <p>Free Delivery!</p>
            <?php
            if ($item_total == 0) {
            ?>
                <a href="checkout.php?res_id=<?php echo $_GET['res_id']; ?>&action=check" class="btn btn-danger btn-lg disabled">Checkout</a>
            <?php
            } else {
            ?>
                <a href="checkout.php?res_id=<?php echo $_GET['res_id']; ?>&action=check" class="btn btn-success btn-lg active">Checkout</a>
            <?php
            }
            ?>
        </div>
    </div> 






    <main class="main-area fix">
  
<div style="text-align: center; font-size: 55px; margin-bottom: 20px; font-weight: bold; color: #333;margin-top:160px;color:black;">

    <span>KERT
</span><!-- banner-area -->
   
    <div style="text-align: center;font-size: 55px;margin-bottom: -29px;font-weight: bold;color: #333;margin-top: 9px;color:black;">
  
  <span>Automatic Microgreen Cultivator </span>
</div>      <!-- Ingredients-area -->
          <section id="ingredient" class="ingredients-area">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 col-md-7">
                  <div class="ingredients-img">
                    <img src="assets/img/others/kert1234.png" alt="img">

                  </div>
                </div>
                <div class="col-xl-4 col-lg-9" style="">
                  <div class="ingredients-items-wrap">
                    <div class="section-title mb-60">
                      <p class="sub-title"></p>
                     
                      

<h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size:75px; font-weight: bold;margin-left: 80px;">Color of Your Kert</h2><center style="
  margin-bottom: 22px;
  margin-top: 25px;
"><div class="color-box"> </div><p style="
  margin-top: -41px;
  margin-left: 189px;
  font-family: garet;
  font-size: 30px;
">Cream &amp; Beige</p> </center>

<center><div class="colorr-box"></div><p style="
  margin-top: -41px;
  margin-left: 187px;
  font-family: garet;
  font-size: 30px;
">Green &amp; Brown</p></center>

                     
                    </div>
                    
                    

                    <div class="row justify-content-center justify-content-lg-start">
                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
            
          </section>
          <!-- Ingredients-area-end -->
    
          <center><span style="
  font-size: 36px;
  color: black;
  font-family: garet;
  font-style: bold;
">   Discover our revolutionary system designed to elevate your wellness journey effortlessly. <br><br>

Seamlessly integrating cutting-edge technology with sustainable practices, our system empowers you to cultivate nutrient-rich microgreens at home. Say goodbye to hidden hunger and embrace a healthier lifestyle with ease. <br><br>
ake the first step towards vibrant health today!</span></center>
          
      

    <!-- features-product -->
    <div class="container" style="
  margin-top: 150px;
">
              <div class="row align-items-center justify-content-center">                  
                <div class="col-xl-5 col-lg-6 col-md-7" style="
">
                  <div class="ingredients-img">
                    
                    
                  <div class="ingredients-items-wrap">
                    <div class="section-title mb-60" style="margin-left: -30px;">
                      
                      <h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size: 110px;font-weight: bold;">Place<p class="sub-title" style="color:black;text-transform: none;">Place the Seed Patchs on the tray</p></h2><h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size: 110px;font-weight: bold;">Fill<p class="sub-title" style="
  color: black;
  text-transform: none;
">Fill with 1.5L of Water</p></h2><h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size: 110px;font-weight: bold;">Harvest
<p class="sub-title" style="
  color: black;
  text-transform: none;
">Harvest Goodness bundle</p></h2><h2 class="title" style="font-family: 'IBM Plex Sans', sans-serif;text-transform: none;font-size: 110px;font-weight: bold;">Sprinkle<p class="sub-title" style="
  color: black;
  text-transform: none;
">Harvest Goodness bundle</p></h2>

                    </div>
                    <div class="row justify-content-center justify-content-lg-start">
                       
                        </div>
                      </div></div>
                </div>
                <div class="col-xl-7 col-lg-9"> 
                  
                    <img src="assets/img/others/seedpatch.png" alt="img" style="
  width: 75%;
  margin-left: -23px;
"></div>
                  </div>
                </div><center>
  <div class="row align-items-center justify-content-center">  
      <div class="col-18" style="
          font-size: 92px;
          margin-left: 5%; /* Adjust margin for responsiveness */
          margin-right: 5%; /* Adjust margin for responsiveness */
          padding: 10% 5%; /* Adjust padding for responsiveness */
          font-family: 'playfair display', serif;
          font-weight: bold;
          text-align: center; /* Center the text */
      ">
          Microgreen Packs 
          <p style="
              font-family: 'Zing Rust Script', cursive;
              font-size: 35px;
              font-style: italic;
              margin: 0; /* Reset margin for consistency */
              margin-top: 20px; /* Adjust margin for spacing */
          ">
              2 Base Varieties + 2 Special Varieties
          </p>
      </div>
  </div>
</center><style>
  @media only screen and (max-width: 450px) {
      .col-18 {
          font-size: 50px !important; /* Adjust font size for smaller screens */
          margin-left: 10px !important; /* Adjust margin for smaller screens */
          margin-right: 10px !important; /* Adjust margin for smaller screens */
          padding: 20px !important; /* Adjust padding for smaller screens */
      }
  }
</style>


<style><center>
  <div class="row align-items-center justify-content-center">  
      <div class="col-18" style="
          font-size: 92px;
          margin-left: 5%; /* Adjust margin for responsiveness */
          margin-right: 5%; /* Adjust margin for responsiveness */
          padding: 10% 5%; /* Adjust padding for responsiveness */
          font-family: 'playfair display', serif;
          font-weight: bold;
          text-align: center; /* Center the text */
      ">
          Microgreen Packs 
          <p style="
              font-family: 'Zing Rust Script', cursive;
              font-size: 35px;
              font-style: italic;
              margin: 0; /* Reset margin for consistency */
              margin-top: 20px; /* Adjust margin for spacing */
          ">
              2 Base Varieties + 2 Special Varieties
          </p>
      </div>
  </div>
</center>
</style>
<center>
    <div class="container">
        <div class="row align-items-center justify-content-center">  
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div id="accordion" class="divider" style="
                    font-size: 61px;
                    margin-left: -264px;
                    padding: 35px;
                    font-family: 'playfair display', serif;
                    font-weight: bold;
                ">
                    Base Varieties            
                </div>
                <p style="
                    font-family: garet;
                    margin: -25px; /* Reset margin for consistency */
                    font-size: 35px;
                    margin-left: -184px;
                ">
                    Green Mustard <br> (Zinc Booster)
                </p>
            </div>
        </div>
    </div>
</center>

<style>
    @media only screen and (max-width: 400px) {
        #accordion {
            font-size: 40px !important; /* Adjust font size for smaller screens */
            margin-left: -30px !important; /* Adjust margin for smaller screens */
            padding: 20px !important; /* Adjust padding for smaller screens */
        }

        p {
            font-size: 25px !important; /* Adjust font size for smaller screens */
            margin-left: -100px !important; /* Adjust margin for smaller screens */
        }
    }
</style>

  <div class="row align-items-center justify-content-center">  
  <div class="col-xl-5 col-lg-6 col-md-7">
  <div id="accordion" class="divider" style="
          font-size: 33px;
          margin-left: -230px;
          padding: 35px;
          font-family: garet;
          margin-top: 147px;
      ">
Kohlrabi Greens         </div>
</div>
</div>

       <section id="paroller" class="features-products">
        <div class="container">
            <?php
            $query_res = mysqli_query($conn, "select * from product WHERE rs_id = '" . $_GET['res_id'] . "' LIMIT 8");
            while ($r = mysqli_fetch_array($query_res)) {
                echo '
                <div class="container">
                <h2 class="title" style="font-family: \'IBM Plex Sans\', sans-serif;text-transform: none;font-size: 44px;font-weight: bold;">'. $r['title'] .'</h2>
                <div class="row align-items-center justify-content-center">                  
                    <div class="col-xl-5 col-lg-6 col-md-7" style="margin-top: 43px;">
                        <div class="ingredients-img">                    
                            <div class="ingredients-items-wrap">                      
                                <div class="section-title mb-60">                        
                                    <h2 class="title" style="font-family: \'IBM Plex Sans\', sans-serif;text-transform: none;font-size: 44px;font-weight: bold;">Radish Mix Greens<p class="sub-title" style="color:black;text-transform: none;">Elevate your culinary experience with our vibrant Radish Mix Greens, packed with flavor and essential nutrients. Add a burst of freshness to your dishes and nourish your body with every bite.</p></h2>
                                    <h2 class="title" style="font-family: \'IBM Plex Sans\', sans-serif;text-transform: none;font-size: 44px;font-weight: bold;">Red Amaranth <p class="sub-title" style="color:black;text-transform: none;">Indulge in the rich taste and vibrant color of our Red Amaranth microgreens, offering a powerhouse of antioxidants and vitamins. Elevate your salads and sandwiches while boosting your immune system with this nutrient-dense superfood.</p></h2>

                                </div>
                                <div class="row justify-content-center justify-content-lg-start">                         
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">                     
                        <img src="admin/Res_img/product/'. $r['img'] .'" alt="img" style="width: 80%; margin-left: 165px; margin-top: -64px;">
                    </div>
                </div>
                <div style="text-align: right; margin-right: 60px;">
                    <form method="post" action="cultivator.php?res_id='. $r['rs_id'] .'&action=add&id='. $r['d_id'] .'">
                        <input type="submit" class="btn theme-btn" value="'. $r['price'] .'" style="margin-left: 37px;">
                        <input class="b-r-0" type="text" name="quantity" style="margin-left:30px;    font-size: 20px;" value="1" size="2" />
                        <input type="submit" class="btn theme-btn" value="Add To Cart" style="margin-left: 31px;">
                    </form>
                </div>
            </div>';
            }
            ?>
        </div>
    </section>
    <script>
        function toggleCart() {
            var cartPopup = document.getElementById("cartPopup");
            if (cartPopup.style.display === "none") {
                cartPopup.style.display = "block";
            } else {
                cartPopup.style.display = "none";
            }
        }
    </script>
    <style>
        /* Sticky checkout button styles */
        .sticky-checkout {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }
        .sticky-checkout button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .sticky-checkout button:hover {
            background-color: #45a049;
        }
        /* Cart popup styles */
        .cart-popup {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            padding: 20px;
            border-radius: 5px;
            animation: slideInRight 0.5s forwards;
        }
        .cart-popup h3 {
            margin-top: 0;
        }
        .cart-popup .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }
    </style>
    <style>
        /* Styles for the sticky checkout button */
        .sticky-checkout {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }
        /* Styles for the cart popup */
        .cart-popup {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            padding: 20px;
        }
        /* Close button for the cart popup */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
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
       <style>
        /* Inline styles with media query for max-width 400px */
        @media only screen and (max-width: 430px) {
            .title {
                font-size: 30px !important; /* Adjust font size as needed */
            }
            .sub-title {
                font-size: 20px !important; /* Adjust font size as needed */
            }
            .sticky-checkout {
                bottom: 10px !important; /* Adjust position as needed */
                right: 10px !important; /* Adjust position as needed */
            }
            .cart-popup {
                width: 250px !important; /* Adjust width as needed */
                right: 10px !important; /* Adjust position as needed */
            }
            /* Additional classes */
            .container {
                padding: 10px !important; /* Adjust padding as needed */
                margin: 5px !important; /* Adjust margin as needed */
            }
            .col-xl-5, .col-xl-7 {
                width: 100% !important; /* Adjust width as needed */
                margin-bottom: 10px !important; /* Adjust margin as needed */
            }
            .ingredients-img img {
                width: 100% !important; /* Adjust width as needed */
            }
            .features-products .container {
                padding: 10px !important; /* Adjust padding as needed */
                margin: 5px !important; /* Adjust margin as needed */
            }
            .features-products img {
                width: 100% !important; /* Adjust width as needed */
                margin-bottom: 10px !important; /* Adjust margin as needed */
            }
            /* Add more styles as needed */
            
        }
    </style>
   
   <footer class="footer-area">
      <div class="footer-instagram">
        <div class="container">
          <div class="row g-0 instagram-active slick-initialized slick-slider">
            
            
            
            
            
            
          <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3791px; transform: translate3d(-1338px, 0px, 0px);"><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="-5" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post02.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post02.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="-4" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post03.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post03.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="-3" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post04.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post04.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="-2" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post05.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post05.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="-1" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post06.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post06.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide" style="width: 223px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post01.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post01.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-current slick-active" style="width: 223px;" tabindex="0" data-slick-index="1" aria-hidden="false">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post02.png" class="popup-image" tabindex="0"><img src="assets/img/others/instagram_post02.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-active" style="width: 223px;" tabindex="0" data-slick-index="2" aria-hidden="false">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post03.png" class="popup-image" tabindex="0"><img src="assets/img/others/instagram_post03.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-active" style="width: 223px;" tabindex="0" data-slick-index="3" aria-hidden="false">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post04.png" class="popup-image" tabindex="0"><img src="assets/img/others/instagram_post04.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-active" style="width: 223px;" tabindex="0" data-slick-index="4" aria-hidden="false">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post05.png" class="popup-image" tabindex="0"><img src="assets/img/others/instagram_post05.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-active" style="width: 223px;" tabindex="0" data-slick-index="5" aria-hidden="false">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post06.png" class="popup-image" tabindex="0"><img src="assets/img/others/instagram_post06.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="6" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post01.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post01.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="7" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post02.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post02.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="8" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post03.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post03.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="9" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post04.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post04.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="10" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post05.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post05.png" alt="img"></a>
              </div>
            </div><div class="col-2 slick-slide slick-cloned" style="width: 223px;" tabindex="-1" data-slick-index="11" id="" aria-hidden="true">
              <div class="footer-insta-item">
                <a href="assets/img/others/instagram_post06.png" class="popup-image" tabindex="-1"><img src="assets/img/others/instagram_post06.png" alt="img"></a>
              </div>
            </div></div></div></div>
        </div>
      </div>
      <div class="footer-top-wrap">
        <div class="container">
          <div class="footer-widgets-wrap">
            <div class="row">
              <div class="col-lg-4 col-md-7" style="
    font-size: 20px;
">
                <div class="footer-widget">
                  <div class="footer-about">
                    <div class="footer-logo logo">
                      <a href="index.html"><img src="assets/img/logo/white_logo.png" alt="Logo"></a>
                    </div>
                    <div class="footer-text">
                      <p style="
    font-size: 15px;
">
                        Promoting accessible and sustainable indoor gardening.
Exceptional customer experiences while contributing positively to the global ecosystem.
                      </p>
                    </div>
                    <div class="footer-social">
                      <a href="#"><i class="fab fa-facebook"></i></a>
                      <a href="https://twitter.com/innovation_ss"><i class="fab fa-twitter"></i></a>
                      <a href="#https://www.instagram.com/agriqulture.innovations/?igsh=cWtnYTFyYXFta29i"><i class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/company/agriqulture/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-6" style="
    font-size: 15px;
">
                <div class="footer-widget">
                  <h4 class="fw-title">About Us</h4>
                  <ul class="list-wrap">
                    <li><a href="about.php">About Company</a></li>
                    <li><a href="#pricing">Price &amp; Plans</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-5 col-sm-6" style="
    font-size: 15px;
">
                <div class="footer-widget">
                  <h4 class="fw-title">Support</h4>
                  <ul class="list-wrap">
                   <!-- <li><a href="#">Knowledge Base</a></li> -->
                    <li><a href="blogs.php">Blog</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Terms&amp;Services.php">Term &amp; Services</a></li>
                    <li><a href="setupinstruction.php">Setup Instructions</a></li>
                    <li><a href="admin/index.php">Admin</a></li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-5">
                <div class="footer-widget">
                  <h4 class="fw-title">CONTACT US</h4>
                  <div class="footer-contact-wrap">
                    <p>Thane, Mumbai , India 400601</p>
                    <ul class="list-wrap">
                      <li class="phone" style="
    font-size: 15px;
">
                        <i class="fas fa-phone"></i> +918076406706
                      </li>
                      <li class="mail" style="
    font-size: 15px;
">
                        <i class="fas fa-envelope"></i> info.agriqulture@gmail.com
                      </li>
                      <li class="website" style="
    font-size: 15px;
">
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
          <img src="assets/img/others/footer_shape01.png" alt="img" class="wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible;">
        </div>
        <div class="footer-shape two">
          <img src="assets/img/others/footer_shape02.png" alt="img" class="wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible;">
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
                <img src="assets/img/others/card_img.png" alt="card">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
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
    </body>
    </html>

</body>
</html>