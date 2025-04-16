<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services Cube - Responsive</title>

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
      max-width: 1400px;
      height: 900px; /* Increased from 700px */
      margin: 0 auto;
      perspective: 2000px;
      text-align: left;
      position: relative;
    }

    .service-cube {
      width: 100%;
      height: 100%;
      position: relative;
      transform-style: preserve-3d;
      transform: translateZ(-750px); /* Adjusted to match new size */
      transition: transform 0.5s ease-in-out;
    }

    .service-face {
      position: absolute;
      width: 100%;
      padding: 20px;
      background: rgb(250, 250, 250);
      border-radius: 5px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      overflow: hidden;
    }

    .service-face img {
      width: 48%;
      max-height: 100%;
      object-fit: cover;
      border-radius: 5px;
    }

    .service-face h2 {
      font-size: 2.5em;
      color: #07ad90;
      margin-bottom: 15px;
    }

    .service-face p {
      font-size: 1.4em;
      line-height: 1.8em;
    }

    /* Cube face positions */
    .service-front {
      transform: rotateY(0deg) translateZ(750px);
    }
    .service-front.inactive,
    .service-right.inactive {
      display: none;
    }
    .service-right {
      transform: rotateY(90deg) translateZ(750px);
    }

    /* Navigation */
    .service-nav {
      margin: 20px 0;
      padding: 0;
      text-align: center;
    }

    .service-nav li {
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

    .service-nav li.active {
      background-color: #07ad90;
      color: #fff;
      border-radius: 4px;
    }

    /* Service cards */
    .service-card {
      background: #fff;
      height: 540px; /* Increased from 450px */
      width: 100%;
      max-width: 24rem; /* Increased from 20rem */
      box-shadow: 0 0.5rem 0.9375rem rgba(0, 0, 0, 0.1);
      text-align: center;
      border-radius: 5px;
      padding: 1em;
    }

    .service-card h3 {
      font-weight: bold;
      font-size: 1.6rem;
      color: #000957;
      text-align: left;
      padding: 0;
      line-height: 2rem;
    }

    .service-card p {
      text-align: left;
      font-size: 1.2rem;
      color: #000c79;
    }

    .service-card img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-size: cover;
      width: 100%;
      height: 252px; /* Increased from 210px */
      object-fit: cover;
      border-radius: 5px;
    }

    .service-card img:hover {
      transform: scale(1.02);
    }

    /* Responsive styles */
    @media (max-width: 1024px) {
      .wrapper {
        height: 720px;
      }

      .service-face h2 {
        font-size: 2em;
      }

      .service-face p {
        font-size: 1.2em;
      }
    }

    @media (max-width: 768px) {
      .wrapper {
        height: 660px;
      }

      .service-face {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .service-face img,
      .service-face {
        width: 90%;
      }

      .service-face h2 {
        font-size: 1.8em;
      }

      .service-face p {
        font-size: 1em;
      }
    }

    @media (max-width: 480px) {
      .wrapper {
        height: 600px;
      }

      .service-nav li {
        font-size: 1em;
        margin: 0 10px;
      }

      .service-face img {
        max-height: 300px;
      }
    }

    @media (max-width: 360px) {
      .wrapper {
        height: 540px;
      }

      .service-face h2 {
        font-size: 1.5em;
      }

      .service-face p {
        font-size: 0.95em;
      }
    }
  </style>
</head>
<body>
  <section id="services" class="section">
    <h1>Helping You Every Step of the Way</h1>
    <p>
      Whether you're an individual looking to secure your family's future or a business aiming to support 
      your employees' financial well-being, I'm here to provide tailored solutions that meet your unique 
      needs, guiding you every step of the way towards financial stability and success.
    </p>

    <!-- Navigation for Services -->
    <ul class="service-nav">
      <li onclick="showFront()">For Individuals and Families</li>
      <li onclick="showRight()">For Business and Corporate Clients</li>
    </ul>

    <div class="wrapper">
      <div class="service-cube">
        <!-- Front - For Individuals and Families -->
        <div class="service-face service-front">
          <div class="service-card">
            <img src="resources/images/background-banner/7.png" />
            <h3>Life Insurance</h3>
            <p>Ensure your family's financial security in case of unforeseen events.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/5.png" />
            <h3>Health Insurance</h3>
            <p>Cover medical expenses & critical illnesses.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/13.png" />
            <h3>Investment Planning</h3>
            <p>Enjoy financial freedom when you retire.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/7.png" />
            <h3>Life Insurance</h3>
            <p>Ensure your family's financial security in case of unforeseen events.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/5.png" />
            <h3>Health Insurance</h3>
            <p>Cover medical expenses & critical illnesses.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/13.png" />
            <h3>Investment Planning</h3>
            <p>Enjoy financial freedom when you retire.</p>
          </div>
        </div>

        <!-- Right - For Business and Corporate Clients -->
        <div class="service-face service-right">
          <div class="service-card">
            <img src="resources/images/background-banner/13.png" />
            <h3>Customized HMO & Medical Insurance Plan</h3>
            <p>Provide employees with affordable and comprehensive healthcare solutions.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/3.png" />
            <h3>Group Life Insurance & Employee Benefits</h3>
            <p>Protect your workforce and boost employee retention.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/14.png" />
            <h3>Company Investment & Retirement Plans</h3>
            <p>Help employees prepare for a financially stable future.</p>
          </div>
          <div class="service-card">
            <img src="resources/images/background-banner/14.png" />
            <h3>Company Investment & Retirement Plans</h3>
            <p>Help employees prepare for a financially stable future.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    const cube = document.querySelector(".service-cube");
    const navItems = document.querySelectorAll(".service-nav li");

    function setActive(index) {
      navItems.forEach((item, i) => {
        item.classList.toggle("active", i === index);
      });
    }

    function showFront() {
      cube.style.transform = "translateZ(-750px) rotateY(0deg)";
      setActive(0);
    }

    function showRight() {
      cube.style.transform = "translateZ(-750px) rotateY(-90deg)";
      setActive(1);
    }

    // Set default active on load
    setActive(0);
  </script>
</body>
</html>
