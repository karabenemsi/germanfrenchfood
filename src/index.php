    <?php
    define('HOME_SITE', true);
    include('./includes/database.php');
    include('./includes/header.php');


?>
    <main>

    <section class="hero" style="background-image:url(./images/hero2.jpg); background-attachment: unset; background-position: center center">

    </section>

        <section class="split-text">
        
      <div class="half">
        <div class="container">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic iure debitis est soluta itaque ratione rerum, aperiam modi, exercitationem iste quo voluptatem illo necessitatibus error accusamus odit. Similique eveniet explicabo id debitis. Possimus nisi odit, dolores quae saepe ullam impedit.</p>
        </div>
      </div>
      <div class="half">
        <div class="container">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>Lorem ipsumum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis est odio sequi vitae consequatur sit delectus temporibus! Consequuntur placeat deserunt, qui eum ab amet aspernatur sapiente perspiciatis impedit a ullam maxime architecto illo ratione totam recusandae itaque veritatis veniam!</p>
        </div>
      </div>

    </section>

    

    <section class="homemenu">

        <a class="homebox" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/dishes/haxe.jpg)">
            <h1> Haxe </h1>

        </a>

        <a class="homebox" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/dishes/tartare.jpg)">
        <h1> Steack tartare </h1>

        </a>

        <a class="homebox" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/dishes/weisswurst.jpg)">
        <h1> Weißwurst </h1>

        </a>

        <a class="homebox" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/dishes/fondant_au_chocolat.jpg)">
        <h1>Fondant au chocolat</h1>

        </a>

        <a class="homebox" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/dishes/rouladen.jpg)">
        <h1> Rouladen </h1>

        </a>

        <a class="homebox" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/dishes/flammenkueche.jpg)">
        <h1>Flammenkueche</h1>
        </a>



    </section>


    
    <section class="video" style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)));">
            <video autoplay loop muted class="background-video">
                <source src="./videos/introVid.mp4" type="video/mp4"> 
            </video>
            <div class="overlay"></div>
          <h2>Freshly Made</h2>
          <p>Our ingredients are grown regionally and selected by hand by our chefs. The dishes are freshly prepared for you after your order and then served at your table. In order to provide you with a high quality diet, we constantly carry out quality controls and support sustainable agriculture.</p>
        </section>
    
    </main>
<?php
    include('./includes/footer.php'); 
?>
