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
      flex-wrap: wrap;
      justify-content: center;
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

    .rec-prism-left {
      transform: rotateY(-90deg) translateZ(625px);
    }

    .rec-prism-top {
      transform: rotateX(90deg) translateZ(625px);
    }

    .rec-prism-bottom {
      transform: rotateX(-90deg) translateZ(625px);
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

    .about-list li.active {
      background-color: #07ad90;
      color: #fff;
      border-radius: 4px;
    }

    /* Service cards */
    .service-card {
      background: #fff;
      width: 100%;
      max-width: 20rem;
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
      font-size: 1.1rem;
      color: #000c79;
    }

    .service-card img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-size: cover;
      width: 100%;
      height: auto;
      object-fit: cover;
      padding: 0.5rem;
      border-radius: 5px;
    }

    .service-card img:hover {
      transform: scale(1.02);
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
  <section id="services" class="section">
    <h1>Helping You Every Step of the Way</h1>
    <p>
      Whether you're an individual looking to secure your family's future or a business aiming to support 
      your employees' financial well-being, I'm here to provide tailored solutions that meet your unique 
      needs, guiding you every step of the way towards financial stability and success.
    </p>

    <!-- Navigation for Services -->
    <ul class="about-list">
      <li onclick="showFront()">For Individuals and Families</li>
      <li onclick="showRight()">For Business and Corporate Clients</li>
    </ul>

    <div class="wrapper">
      <div class="rec-prism">
        <!-- Front - For Individuals and Families -->
        <div class="face rec-prism-front">
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
        <div class="face rec-prism-right">
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

    // Optionally, set default active on load
    setActive(0);
  </script>
</body>
</html>
