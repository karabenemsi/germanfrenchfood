<?php
  define('HOME_SITE', false);
  include('./includes/database.php');
  include('./includes/header.php'); 
$category = $_GET['category'];

if($category == ''){
  echo 'Error getting Category, Sorry';
  exit();
}

echo '
    <main class="menu-site">
	<section class="hero" style="background-image:url(./images/hero1.jpg)">
  <h1>Dishes</h1>
  <h2>' . $category . '</h2>
</section>
<div class="menu-container">';




  $sql = 'SELECT * FROM meal m INNER JOIN meal_category mc on m.id = mc.id_meal INNER JOIN category c on mc.id_category = c.id WHERE c.name = "' . $category . '"';


  if($meals = $db->query($sql)) {
    foreach ($meals as $meal) {

      $sql = 'SELECT name FROM category c INNER JOIN meal_category mc ON c.id = mc.id_category WHERE mc.id_meal = ' . $meal["id_meal"];


        echo '
        <section class="menu-item">
          <div class="price">' . $meal['price'] . '€</div>
          <a href="./dish_detail.php?dish='. $meal["id_meal"] . '" class="top-image" style="background-image:url(' . $meal['image'] . ')"></a>
          <div class="categories">
            <ul>';
            if($categories = $db->query($sql)) {
              foreach ($categories as $cat) { 
                echo '<li><a href="./dish_overview.php?category=' . $cat['name'] . '">' . $cat['name'] . '</a></li>';
              }
            }
        echo'
            </ul>
          </div>
          <h2 class="title">'. $meal[1] . '</h2>
          <p class="translation">'. $meal['trans'] . '</p>
          <p class="description">'. $meal['description'] . '</p>
        </section>
        ';
      }
    } else {
       echo '<section><h3>Nothing Found</h3></section>';
  }   


  ?>

	</div>

 

    </main>
<?php

    include('./includes/footer.php'); 
    

    ?>
