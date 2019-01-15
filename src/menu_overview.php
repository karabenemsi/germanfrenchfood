<?php
  define('HOME_SITE', false);
  include('./includes/settings.php');
  include('./includes/database.php');
  include('./includes/functions.php');
  include('./includes/header.php'); 

?>
    <main class="menu-site">

	<section class="hero" style="background-image:url(./images/region/charcuterie.jpg)">
	<h1>French Menus</h1>
</section>
<div class="menu-container">


<?php

$sql = "SELECT * FROM meal";



  $menus = [
    ['./images/region/ile_vierge.jpg',['Vegetarian','Meat','French'],'Breton Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/place_stanislas.jpg',['Vegetarian','Meat','French'],'Parisian Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/pont_notre_dame.jpg',['Vegetarian','French'],'Alsace - Lorraine Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/dune_pillat.jpg',['Vegetarian','Meat','Cheese','French'],'Lyonnais Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?'],
    ['./images/region/hotel_dieu.jpg',['Vegetarian','Light','Meat','French'],'Savoyard Menu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?']
  ];  

  foreach ($db->query($sql) as $meal) {
      echo '
      <section class="menu-item">
        <div class="price">' . $meal['price'] . '</div>
        <a class="top-image" style="background-image:url(' . $meal['image'] . ')"></a>
        <div class="categories">
          <ul>';

          for ($j=0; $j < 3; $j++) { 
            echo '<li><a href="./menu_overview.php?category=' . $meal['name'] . '">' . $meal['name'] . '</a></li>';
          }
            echo'
          </ul>
        </div>
        <h2 class="title">'. $meal['name'] . '</h2>
        <p class="translation">'. $meal['trans'] . '</p>
        <p class="description">'. $meal['description'] . '</p>
      </section>
      ';
    }
  ?>

	</div>

 

    </main>
<?php

    include('./includes/footer.php'); 
    

    ?>
