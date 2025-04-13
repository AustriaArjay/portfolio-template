<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Cube - Responsive</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Tahoma, Verdana, Segoe, sans-serif;
      font-size: 14px;
      background: #f6fffd;
      margin: 0;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin-bottom: 30px;
    }

    .wrapper {
      width: 100%;
      max-width: 1250px;
      height: 700px;
      margin: 0 auto;
      perspective: 2000px;
      text-align: left;
      position: relative;
    }

    .rec-prism {
      width: 100%;
      height: 100%;
      position: relative;
      transform-style: preserve-3d;
      transform: translateZ(-625px);
      transition: transform 0.5s ease-in-out;
    }

    .face {
      position: absolute;
      width: 100%;
      height: 100%;
      padding: 20px;
      background: rgba(250, 250, 250, 0.96);
      border: 3px solid #07ad90;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      overflow: hidden;
    }

    .face img {
      width: 48%;
      max-height: 100%;
      object-fit: cover;
      border-radius: 5px;
    }

    .face .content {
      width: 48%;
      color: #666;
    }

    .face .content h2 {
      font-size: 2.5em;
      color: #07ad90;
      margin-bottom: 15px;
    }

    .face .content p {
      font-size: 1.4em;
      line-height: 1.8em;
    }

    /* Cube face positions */
    .rec-prism-front {
      transform: rotateY(0deg) translateZ(625px);
    }

    .rec-prism-back {
      transform: rotateY(180deg) translateZ(625px);
    }

    .rec-prism-right {
      transform: rotateY(90deg) translateZ(625px);
    }

    /* Navigation */
    .about-list {
      margin: 20px 0;
      padding: 0;
      text-align: center;
    }

    .about-list li {
      display: inline-block;
      list-style-type: none;
      font-size: 1.2em;
      margin: 0 15px;
      color: #42509e;
      position: relative;
      cursor: pointer;
      padding: 5px 10px;
      transition: background 0.3s ease, color 0.3s ease;
    }

    /* Remove the underline */
    .about-list li::after {
      display: none;
    }

    /* Add highlight for active item */
    .about-list li.active {
      background-color: #07ad90;
      color: #fff;
      border-radius: 4px;
    }

    /* Responsive styles */
    @media (max-width: 1024px) {
      .wrapper {
        height: 600px;
      }

      .face .content h2 {
        font-size: 2em;
      }

      .face .content p {
        font-size: 1.2em;
      }
    }

    @media (max-width: 768px) {
      .wrapper {
        height: 550px;
      }

      .face {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .face img,
      .face .content {
        width: 90%;
      }

      .face .content h2 {
        font-size: 1.8em;
      }

      .face .content p {
        font-size: 1em;
      }
    }

    @media (max-width: 480px) {
      .wrapper {
        height: 500px;
      }

      .about-list li {
        font-size: 1em;
        margin: 0 10px;
      }

      .face img {
        max-height: 250px;
      }
    }

    @media (max-width: 360px) {
      .wrapper {
        height: 450px;
      }

      .face .content h2 {
        font-size: 1.5em;
      }

      .face .content p {
        font-size: 0.95em;
      }
    }
  </style>
</head>
<body>

  <section id="about" class="section">
    <h1>About InsuranceGuyPH</h1>

    <div class="wrapper">
      <ul class="about-list">
        <li onclick="showFront()">Goal</li>
        <li onclick="showRight()">Mission</li>
        <li onclick="showBack()">Vision</li>
      </ul>

      <div class="rec-prism">
        <!-- Front - Goal -->
        <div class="face rec-prism-front">
          <img src="resources/profile.png" alt="Goal-Image" />
          <div class="content">
            <h2>Goal</h2>
            <p>
              To become the trusted and go-to expert for health, life, and property insurance,
              delivering exceptional service that makes every client feel valued, prioritized,
              and confident in their financial decisions.
            </p>
          </div>
        </div>

        <!-- Right - Mission -->
        <div class="face rec-prism-right">
          <img src="resources/profile.png" alt="Mission-Image" />
          <div class="content">
            <h2>Mission</h2>
            <p>
              To provide consistent, high-quality, and personalized client service, ensuring
              that every individual receives the best insurance solutions tailored to their unique
              needs and goals.
            </p>
          </div>
        </div>

        <!-- Back - Vision -->
        <div class="face rec-prism-back">
          <img src="resources/profile.png" alt="Vision-Image" />
          <div class="content">
            <h2>Vision</h2>
            <p>
              To be recognized as the leading authority and most reliable financial advisor in the
              Philippines for all things insurance—setting the standard for excellence, trust, and
              client satisfaction in the industry.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    const prism = document.querySelector(".rec-prism");
  const aboutItems = document.querySelectorAll(".about-list li");

  function setActive(index) {
    aboutItems.forEach((item, i) => {
      if (i === index) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
  }

  function showFront() {
    prism.style.transform = "translateZ(-625px) rotateY(0deg)";
    setActive(0);
  }

  function showRight() {
    prism.style.transform = "translateZ(-625px) rotateY(-90deg)";
    setActive(1);
  }

  function showBack() {
    prism.style.transform = "translateZ(-625px) rotateY(-180deg)";
    setActive(2);
  }

  // Optionally, set default active on load
  setActive(0); 
  </script>
</body>
</html>
