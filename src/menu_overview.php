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
  for ($i=0; $i < 10; $i++) {
    echo '
    <section class="menu-item">
      <div class="top-image" style="background-image:url(./images/region/ile_vierge.jpg)"></div>
      <div class="categories">
        <ul>
          <li><a href="">Vegetarian</a></li>
          <li><a href="">French</a></li>
          <li><a href="">Salad</a></li>
          <li><a href="">Menu</a></li>
        </ul>
      </div>
      <h2 class="title">Breton Menu</h2>
      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nulla soluta, magnam ullam sunt incidunt omnis nisi placeat. Odit, quos?
      </p>
    </section>
    ';
  }
  ?>

	</div>

 

    </main>
<?php

    include('./includes/footer.php'); 
    

    ?>
