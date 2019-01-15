<?php
  define('HOME_SITE', false);
  include('./includes/settings.php');
  include('./includes/functions.php');
  include('./includes/header.php'); 

?>
    <main class="menu-site">

	<section class="hero" style="background-image:url(./images/region/charcuterie.jpg)">
	<h1>French Menus</h1>
</section>
<div class="menu-container">


<?php

  $menus = [
    ['./images/region/ile_vierge.jpg',['Vegetarian','Meat','French'],'Breton Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/place_stanislas.jpg',['Vegetarian','Meat','French'],'Parisian Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/pont_notre_dame.jpg',['Vegetarian','French'],'Alsace - Lorraine Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/dune_pillat.jpg',['Vegetarian','Meat','Cheese','French'],'Lyonnais Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/hotel_dieu.jpg',['Vegetarian','Light','Meat','French'],'Savoyard Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?']
  ];  

  for ($i=0; $i < 5; $i++) {
    echo '
    <section class="menu-item">
      <a class="top-image" style="background-image:url(' . $menus[$i][0] . ')"></a>
      <div class="categories">
        <ul>';

        for ($j=0; $j < sizeof($menus[$i][1]); $j++) { 
          echo '<li><a href="./menu_overview.php?category=' . $menus[$i][1][$j] . '">' . $menus[$i][1][$j] . '</a></li>';
        }
          echo'
        </ul>
      </div>
      <h2 class="title">'. $menus[$i][2] . '</h2>
      <p class="translation">English Name</p>
      <p class="description">'. $menus[$i][3] . '</p>
    </section>
    ';
  }
  ?>

	</div>

 

    </main>
<?php

    include('./includes/footer.php'); 
    

    ?>
