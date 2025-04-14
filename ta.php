<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Infinite Carousel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      overflow-x: hidden;
    }

    .home-carousel {
      width: 100%;
      overflow: hidden;
      height: 96vh;
      position: relative;
    }

    .inner-carousel {
      display: flex;
      transition: transform 0.5s ease-in-out;
      height: 100%;
    }

    .carousel-item {
      flex: 0 0 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .carousel-caption1, .carousel-caption2 {
      position: absolute;
      left: 13rem;
      top: 20rem;
      color: white;
    }

    .carousel-item h1 {
      color: #000957;
      font-size: 4.5rem;
      margin-bottom: 1rem;
      line-height: 4rem;
    }

    .carousel-item p {
      font-size: 1.2rem;
      margin-bottom: 5rem;
      color: #000;
    }

    .carousel-item a {
      text-decoration: none;
      font-size: 1rem;
      padding: 1rem;
      background-color: #000957;
      border: #000957 solid 5px;
      color: white;
      font-weight: bold;
      border-radius: 3rem;
    }

    .carousel-item a:hover {
      background-color: #0011ff;
    }

    /* Controls */
    .carousel-control-prev,
    .carousel-control-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 2.5rem;
      color: #000957;
      background: rgba(255, 255, 255, 0.5);
      border: none;
      cursor: pointer;
      z-index: 10;
      padding: 0.5rem 1rem;
    }

    .carousel-control-prev {
      left: 0;
    }

    .carousel-control-next {
      right: 0;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<header id="home" class="home">
    <div class="home-carousel">
      <div class="inner-carousel" id="carouselTrack">
        <!-- Slides -->
        <div class="carousel-item" id="item1" style="background-image: url('resources/backgrounds/3.png');">
          <div class="carousel-caption1">
            <h1>Secure Your Future with <br>Gabino Cunada</h1>
            <p>Trusted Financial Advisor | Helping Filipinos & <br>Businesses Build Wealth & Protection</p>
            <a href="#footer"><i class="fa-brands fa-get-pocket"></i> Get a Free Consultation</a>
          </div>  
        </div>
        <div class="carousel-item" id="item2" style="background-image: url('resources/backgrounds/2.png');">
          <div class="carousel-caption2">
            <h1>Plan Smart <br>Invest Wise</h1>
            <p>Live Secure With Gabino Cunada by Your Side</p>
            <a href="#footer"><i class="fa-brands fa-get-pocket"></i> Get a Free Consultation</a>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" id="prevBtn">←</button>
      <button class="carousel-control-next" id="nextBtn">→</button>
    </div>
  </header>

  <script>
    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let slides = document.querySelectorAll('.carousel-item');
    let index = 1;
    let interval;

    // Clone first and last slides
    const firstClone = slides[0].cloneNode(true);
    const lastClone = slides[slides.length - 1].cloneNode(true);

    firstClone.id = 'first-clone';
    lastClone.id = 'last-clone';

    track.appendChild(firstClone);
    track.insertBefore(lastClone, slides[0]);

    slides = document.querySelectorAll('.carousel-item');
    const slideWidth = slides[index].clientWidth;

    track.style.transform = `translateX(-${slideWidth * index}px)`;

    const moveToSlide = () => {
      track.style.transition = 'transform 0.5s ease-in-out';
      track.style.transform = `translateX(-${slideWidth * index}px)`;
    };

    const resetPosition = () => {
      slides = document.querySelectorAll('.carousel-item');
      if (slides[index].id === 'first-clone') {
        track.style.transition = 'none';
        index = 1;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
      }
      if (slides[index].id === 'last-clone') {
        track.style.transition = 'none';
        index = slides.length - 2;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
      }
    };

    const startAutoSlide = () => {
      interval = setInterval(() => {
        index++;
        moveToSlide();
      }, 5000);
    };

    const stopAutoSlide = () => clearInterval(interval);

    track.addEventListener('transitionend', resetPosition);

    nextBtn.addEventListener('click', () => {
      if (index >= slides.length - 1) return;
      index++;
      moveToSlide();
      stopAutoSlide();
      startAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
      if (index <= 0) return;
      index--;
      moveToSlide();
      stopAutoSlide();
      startAutoSlide();
    });

    window.addEventListener('resize', () => {
      const newWidth = slides[0].clientWidth;
      track.style.transition = 'none';
      track.style.transform = `translateX(-${newWidth * index}px)`;
    });

    // Init
    startAutoSlide();
  </script>

</body>
</html>
