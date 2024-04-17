<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/responsive.css"/>
  <style>
    /* Add your CSS styles here */
    .map-container 
    {
      display: none; /* Initially hiding the map */
    }
  </style>
</head>
<body><center>
  <h1>Contact US</h1>
  <div class="cf">
    <form class="half left" action="contact.php" method="post">
      <input name="name" type="text" class="feedback-input" placeholder="Name" /> 
      <input name="email" type="text" class="feedback-input" placeholder="Email" />
      <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
      <input type="submit" name="submit" value="SUBMIT" />
      <div class="footer-contact-wrap">
        <p>Thane, Mumbai, India 400601</p>
        <br></br>
        <ul class="list-wrap">
          <li class="phone">
            <i class="fas fa-phone"></i> +918076406706
          </li>
          <li class="mail">
            <i class="fas fa-envelope"></i> info.agriqulture@gmail.com
          </li>
          <li class="website" onclick="toggleMap()">
            <i class="fas fa-globe"></i> Show Map
          </li>
        </ul>
      </div>
    </form>
    
    <div class="half right map-container" id="mapContainer">
      <!-- Embedded Google Map iframe -->
      <iframe id="googleMap" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- Your Google Map iframe code here -->
    </div>
  </div>
  </center>

  <script>
    function toggleMap() {
      var mapContainer = document.getElementById('mapContainer');
      var googleMap = document.getElementById('googleMap');

      if (mapContainer.style.display === 'none') {
        mapContainer.style.display = 'block';
        googleMap.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.9730051604083!2dYOUR-LONGITUDE!3dYOUR-LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zYOUR-LATITUDE!5e0!3m2!1sen!2sus!4vYOUR-MAP-EMBED-CODE';
      } else {
        mapContainer.style.display = 'none';
        googleMap.src = '';
      }
    }
  </script>
</body>
</html>