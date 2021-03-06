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
          <h2>Bienvenue a tous !</h2>
          <p>En 2003, six amis d'origine Française et Allemande créeront GermanFrenchFood. Leur souhait était de donner la possibilité à tout le monde de profiter de leur culture culinaire. GermanFrenchFood a l'objectif de permettre à tout le monde de découvrir des spécialités locales, et nous sommes fiers de vous les vendre.</p>
        </div>
      </div>
      <div class="half">
        <div class="container">
          <h2>Herzlich willkommen</h2>
          <p>Im Jahr 2003 haben sechs französische und deutsche Freunde GermanFrenchFood kreiert. Ihr Wunsch war es, allen die Möglichkeit zu geben, Kochkultur zu genießen. GermanFrenchFood hat das Ziel, dass jeder lokale Spezialitäten entdecken kann, und wir freuen uns darauf Ihnen diese zu servieren.
        </p>
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
