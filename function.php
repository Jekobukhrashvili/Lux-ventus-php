<?php 

function navbutton($array){

  foreach ($array as $fashionBtn){
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
}
