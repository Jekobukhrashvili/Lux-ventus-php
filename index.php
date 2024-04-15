<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Lux Ventus Blog</title>

    <?php include "./massive.php" ?>
    <?php include "./function.php" ?>

  </head>
  <body>
    <!-- Header start -->
    <header class="Header">
      <div class="header-div">
        <div class="header-flex">
          <div class="logo">
            <a href="#"><img src="Images/Footer-logo.png" alt="Logo" /></a>
          </div>

          <!-- NavMenu -->
          <nav class="navigation">
            <ul>
              
              <?php
                 navbutton($fashionBtns);
              ?>
                 
              <li class="contact-us">
                <a  href="#">Contact Us</a>
              </li>

            </ul>
          </nav>
          <!-- NavMenu -->

        </div>
      </div>
    </header>
    <!-- Header-End -->

    <main>
      <!-- First Section -->
      <section class="first-section">
        <div class="first-section-container">
          <div class="first-section-flex">
            <div class="image-section">
              <img src="Images/section1-logo.png" alt="image1" />
            </div>

            <div class="image-text">
              <p class="first-paragraph">LUX VENTUS MAGAZINE</p>
              <h1>We Are the <span>Ventus Fashion</span></h1>
              <p class="second-paragraph">
                We like to gossip about everything, but we will never forget the
                daily fashion dose.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- First Section -->

      <!-- Second-Section -->
      <section class="Second-section">
        <div class="topics-container">
          <h2>Topics</h2>
          <div class="topics">
            <div class="Cards">

              <?php
            cards2($cards);
            ?>
 
            </div>
          </div>
        </div>
      </section>
      <!-- Second Section -->

      <hr />
      <br/>



          <!-- Third Section -->
	          <div class="php-container" style="display:flex; flex-direction: column; justify-contenr:center; align-items:center;">


	          	<?php
                cards($secondCard);
              ?>

	          </div>
          <!-- Third Section -->


      </section>
    </main>

    <!-- Footer Start -->
    <footer>
      <div class="Footer-div">
        <div class="footer-content">
          <div class="footer-logo">
            <img src="Images/Footer-logo.png" alt="Logo" />
          </div>
          <h5>Let's Hang Out</h5>
          <div class="Buttons">
            <img src="Images/facebook1.png" alt="Facebook" />
            <img src="Images/twitter2.png" alt="Twitter" />
            <img src="Images/linkedin3.png" alt="Linkedin" />
            <img src="Images/youtube4.png" alt="Youtube" />
            <img src="Images/instagram5.png" alt="Instagram" />
          </div>
        </div>
        <hr />
        <div class="h6-div">
          <h6>© 2023 - Lux Ventus by Zine.E.Falouti</h6>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
  </body>
</html>
