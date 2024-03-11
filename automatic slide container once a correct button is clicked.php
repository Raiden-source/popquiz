<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .container {
      width: 300px;
      overflow: hidden;
      white-space: nowrap;
    }

    .slider {
      display: inline-block;
      white-space: nowrap;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      display: inline-block;
      width: 100%;
      box-sizing: border-box;
      padding: 10px;
      background-color: #ccc;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="slider">
    <div class="slide">Slide 1</div>
    <div class="slide">Slide 2</div>
    <div class="slide">Slide 3</div>
  </div>
</div>

<button onclick="nextSlide()">Next Slide</button>

<script>
  let currentSlide = 0;
  const totalSlides = document.querySelectorAll('.slide').length;
  const slider = document.querySelector('.slider');

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  }

  function updateSlider() {
    const transformValue = -currentSlide * 100 + '%';
    slider.style.transform = 'translateX(' + transformValue + ')';
  }
</script>

</body>
</html>
