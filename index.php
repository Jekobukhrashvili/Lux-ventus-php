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

    <?php require "./massive.php" ?>

  </head>
  <body>
    <!-- Header start -->
    <header class="Header">
      <div class="header-div">
        <div class="header-flex">
          <div class="logo">
            <a href="#"><img src="Images/Footer-logo.png" alt="Logo" /></a>
          </div>
          <nav class="navigation">
            <ul>
              <?php
              foreach ($fashionBtns as $fashionBtn){
                echo ' <li class="category">
                        <a href="#"> ' . $fashionBtn['btnname'] . ' </a>
                        <ul class="btncode">';
                        
                    foreach ($fashionBtn['child'] as $btncode) {
                      echo '<li> 
                      <a href="#"> ' . $btncode['name'] . ' </a>
                      </li>';
                    }

                   

                    echo '</ul>
                      </li>';

              }                      
              ?>
              
              <li>
                <a class="contact-us" href="#">Contact Us</a>
              </li>
              <li>
                <a href="#"
                  ><img
                    class="search-logo"
                    src="Images/search logo.png"
                    alt="Search icon"
                  />
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- Header-End -->

    <main>
      <!-- First Section start -->
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
      <!-- First Section End -->

      <!-- Second-Section-Start -->
      <section class="Second-section">
        <div class="topics-container">
          <h2>Topics</h2>
          <div class="topics">
            <div class="Cards">

              <?php
                  for ($i = 0; $i < 6; $i++){
                  echo ' <div class="card">
                  <img src = ' . $cards[$i]['img'] . ' />
                  <h3> ' . $cards[$i]['title'] . ' </h3>
                  <button> View More </button>
                </div> ';
                }
            ?>
 
            </div>
          </div>
        </div>
      </section>

      <hr />


      <section class="Third-section">
        <div class="Third-section-container">
          <div class="third-img-container">
            <img src="Images/Third-section-image.png" alt="image3" />
          </div>

          <div class="text-container">
            <div class="first-line-content">
              <img src="Images/Third-section -icon.png" alt="icon" />
              <h4>Mallory Reyn</h4>
              <h4>April 14th, 2023</h4>
              <h4><span>COMING IN HOT!</span></h4>
            </div>
            <div class="second-line-content">
              <h5>The Latest Trends from the Moon Fashion Week.</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et
                massa mi. Aliquam in hendrerit urna. Pellentesque sit amet
                sapien fringilla, mattis ligula consectetur, ultrices mauris.
                Maecenas vitae mattis tellus. Nullam quis imperdiet augue.
                Vestibulum.
              </p>
              <div class="button-div">
                <button class="arrow-button">&#8594;</button>
                <button class="second-line-button">READ MORE</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br /><br />
      <!-- Section-4-End -->


          <!-- Fisrt Card -->
	<div class="php-container" style="display:flex; flex-direction: column; justify-contenr:center; align-items:center;">


		<?php

				for ($y = 0; $y < 3; $y++){
					echo '
				<div class= "php-div" style="display:flex; gap: 10px; margin-bottom: 30px; justify-contenr:center; align-items:center; "> 
					<div class="image1-1" >
					<img class="image11" src="Images/image1-1.png" alt="logo"/>
					<button class="fashion">' . $secondCard[$y]['buttonName'] . '</button>
				</div>

				<div class="text-content">
					<div class="text-content-1">
						<img src="Images/Third-section -icon.png" alt="Icon" />

						<div class="text-h4">
							<h4>Mallory Reyn</h4>
							<h4>' . $secondCard[$y]['date'] . '</h4>
						</div>
					</div>
					<div class="card-content-2">
						<h5>' . $secondCard[$y]['title'] . ' </h5>
						<p>' . $secondCard[$y]['paragraph1'] . ' </p>
						<p>' . $secondCard[$y]['paragraph2'] . '</p>
						<div class="buttons-4">
							<button class="second-line-button">READ MORE</button>
						</div>
					</div>
				</div>	
				</div>' ;
				
				}
				
			?>
	</div>

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
