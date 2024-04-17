<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/team.css">
    <style>
        /* Add your CSS styles here */
        /* ... */
    </style>
</head>
<body>

    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container">
            <img class="mainImg" src="assets\img\logo\white_logo.png" alt="img">
            <div class="allText aboveText">
                <p class="text-blk headingText">
                    Our Mission
                </p>
                <p class="text-blk subHeadingText">
                    Revolutionizing AgriCulture Through Indoor Microgreens.
                </p>
                <p class="text-blk description">
                    SS Agriqulture Innovation is committed to reshaping the agricultural landscape by pioneering the use of indoor microgreens. At the core of our mission is the drive to create a better world through sustainable farming practices. By harnessing innovative technologies and modern cultivation methods, we aim to revolutionize the way food is grown.
                </p>
                <a href="index.html">
                  <button  class="explore">
                  Explore
                  </button>
            </a>
            </div>
        </div>
        
    </div>
<!-- Team -->
<div class="responsive-container-block outer-container">
    <div class="responsive-container-block inner-container">
      <p class="text-blk section-head-text">
        Meet Our TEAM
      </p>
      <p class="text-blk section-subhead-text">
        Revolutionizing AgriCulture Through Indoor Microgreens.
      </p>
      <div class="responsive-container-block">
        <!-- Team card 1 -->
       
        <!-- Team card 2 -->
        
                <!-- Team card 1 -->
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                  <div class="team-card">
                    <div class="img-wrapper">
                      <img class="team-img" src="assets\img\team\IMG_5359.PNG" alt="img">
                    </div>
                    <p class="text-blk name">
                      Sayak Gupta
                    </p>
                    <p class="text-blk position">
                      Co-Founder
                    </p>
                    <div class="social-media-links">
                      <a href="http://www.twitter.com/" target="_blank"rel="noopener">
                        <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg"alt="img">
                      </a>
                      
                      <a href="http://www.gmail.com/" target="_blank"rel="noopener">
                        <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg"alt="img">
                      </a>
                    </div>
                  </div>
                </div>

                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                  <div class="team-card">
                    <div class="img-wrapper">
                      <img class="team-img" src="assets\img\team\Snehal_Ambekar_Photo.png" alt="img">
                    </div>
                    <p class="text-blk name">
                      Snehal Ambekar
                    </p>
                    <p class="text-blk position">
                      Co-Founder
                    </p>
                    <div class="social-media-links">
                      <a href="http://www.twitter.com/" target="_blank"rel="noopener">
                        <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg"alt="img">
                      </a>
                      
                      <a href="http://www.gmail.com/" target="_blank"rel="noopener">
                        <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg"alt="img">
                      </a>
                    </div>
                  </div>
                </div>
        <!-- Repeat the structure for other instructors -->
      </div>
    </div>
  </div>
  <script>
  // Wait for the DOM content to load
  document.addEventListener('DOMContentLoaded', function() {
    // Get all elements with class 'team-card'
    const teamCards = document.querySelectorAll('.team-card');

    // Iterate through each team card element
    teamCards.forEach(card => {
      // Add a click event listener to each card
      card.addEventListener('click', function() {
        // Toggle the class 'show-links' on the clicked card
        card.classList.toggle('show-links');
      });
    });
  });
</script>
</body>
</html>