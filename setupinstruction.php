<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Microgreen Setup Instructions</title>
<style>
  body { 
    width: 100%;
    height: 100%;
    background: grey;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Hides the overflow to prevent scrollbars */
    position: relative; /* Necessary for absolutely positioned elements */
  }
  #particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1; /* Places particles behind other content */
  }
  h1 {
    color: #fff;
    text-align: center;
    margin-top: 50px;
  }
  .instruction-container {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin: 50px auto;
  }
  .instruction {
    flex: 1;
    text-align: center;
    position: relative;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }
  .instruction:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }
  .instruction img {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }
  .instruction:hover img {
    transform: scale(1.05);
  }
  .instruction p {
    margin: 0;
    color: #333;
  }
  .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: calc(100% + 40px);
    height: 2px;
    background-color: #999;
    z-index: -1;
    transition: width 0.3s ease-in-out;
  }
  .instruction:not(:last-child) .arrow {
    width: calc(100% + 20px);
  }
  .arrow::before {
    content: '';
    position: absolute;
    width: 10px;
    height: 10px;
    background-color: #fff;
    border: 2px solid #999;
    border-radius: 50%;
    top: -5px;
    left: -5px;
    z-index: 1;
    transition: transform 0.3s ease-in-out;
  }
  .instruction:not(:last-child) .arrow::before {
    transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
  }
  .instruction:hover .arrow::before {
    background-color: #555;
    transform: scale(1.1);
  }
</style>
</head>
<body>

<div id="particles-js"></div>

<h1>Microgreen Setup Instructions</h1>

<div class="instruction-container">
  <div class="instruction">
    <img src="assets\img\products\cart_p01.jpg" alt="Step 1">
    <p>Step 1: Place the pad</p>
    <div class="arrow"></div>
  </div>
  <div class="instruction">
    <img src="assets\img\products\cart_p01.jpg" alt="Step 2">
    <p>Step 2: Pour water</p>
    <div class="arrow"></div>
  </div>
  <div class="instruction">
    <img src="assets\img\products\cart_p01.jpg" alt="Step 3">
    <p>Step 3: Press button</p>
    <div class="arrow"></div>
  </div>
  <div class="instruction">
    <img src="assets\img\products\cart_p01.jpg" alt="Step 4">
    <p>Step 4: Enjoy</p>
  </div>
</div>

<!-- Additional CSS for arrows -->
<style>
  .instruction-container::before {
    content: '';
    position: absolute;
    top: 50%;
    left: calc(25% + 70px);
    height: 2px;
    background-color: #999;
    width: 150px;
    z-index: -1;
    transition: width 0.3s ease-in-out;
  }

  .instruction-container::after {
    content: '';
    position: absolute;
    top: 50%;
    left: calc(50% + 70px);
    height: 2px;
    background-color: #999;
    width: 150px;
    z-index: -1;
    transition: width 0.3s ease-in-out;
  }

  .instruction:nth-child(1) .arrow {
    display: none;
  }

  .instruction:nth-child(2) .arrow {
    width: calc(25% + 160px);
  }

  .instruction:nth-child(3) .arrow {
    width: calc(50% + 160px);
  }

  .instruction:nth-child(4) .arrow {
    width: calc(75% + 160px);
  }

  .instruction:nth-child(4) .arrow::before {
    display: none;
  }

  .instruction .arrow::before {
    content: '';
    position: absolute;
    width: 10px;
    height: 10px;
    background-color: #fff;
    border: 2px solid #999;
    border-radius: 50%;
    top: -5px;
    left: -5px;
    z-index: 1;
    transition: transform 0.3s ease-in-out;
  }

  .instruction:hover .arrow::before {
    background-color: #555;
    transform: scale(1.1);
  }
</style>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
particlesJS('particles-js', {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": 
    {
      "value": "#ffffff"
    },
    "shape": 
    {
      "type": "circle",
      "stroke": 
      {
        "width": 0,
        "color": "#000000"
      },
      "polygon": 
      {
        "nb_sides": 5
      }
    },
    "opacity": 
    {
      "value": 0.5,
      "random": true,
      "anim": 
      {
        "enable": true,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": 
    {
      "value": 3,
      "random": true,
      "anim": 
      {
        "enable": true,
        "speed": 2,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": 
    {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": 
      {
        "enable": false,
        "rotateX": 600,
        "rotateY": 600
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 250,
        "size": 0,
        "duration": 2,
        "opacity": 0,
        "speed": 3
      },
      "repulse": {
        "distance": 400,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
</script>
</body>
</html>