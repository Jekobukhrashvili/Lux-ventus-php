<?php 

function navbutton($array){

  foreach ($array as $fashionBtns){
        echo ' <li class="category">
            <a href="#"> ' . $fashionBtns['btnname'] . ' </a>
              <ul class="btncode">
              </li> ' ;

            
      foreach ($fashionBtns['child'] as $btncode) {
          echo '<li> 
          <a href="#"> ' . $btncode['name'] . ' </a>
          </li>';
        }

       

        echo '</ul>
          </li>';
  }   
}

function cards($cards){

  foreach ($cards as $secondCard){
    echo '
  <div class= "php-div" style="display:flex; gap: 10px; margin-bottom: 30px; justify-contenr:center; align-items:center; "> 
    <div class="image1-1" >
    <img class="image11" src="Images/image1-1.png" alt="logo"/>
    <button class="fashion">' . $secondCard['buttonName'] . '</button>
  </div>
  
  <div class="text-content">
    <div class="text-content-1">
      <img src="Images/Third-section -icon.png" alt="Icon" />
  
      <div class="text-h4">
        <h4>Mallory Reyn</h4>
        <h4>' . $secondCard['date'] . '</h4>
      </div>
    </div>
    <div class="card-content-2">
      <h5>' . $secondCard['title'] . ' </h5>
      <p>' . $secondCard['paragraph1'] . ' </p>
      <p>' . $secondCard['paragraph2'] . '</p>
      <div class="buttons-4">
        <button class="second-line-button">READ MORE</button>
      </div>
    </div>
  </div>	
  </div>' ;
  
  }

}


function cards2($cardstwo){
  foreach ($cardstwo as $cards){
    echo ' <div class="card">
    <img src = ' . $cards['img'] . ' />
    <h3> ' . $cards['title'] . ' </h3>
    <button> View More </button>
  </div> ';
  }
}