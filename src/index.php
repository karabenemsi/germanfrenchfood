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

        <a class="homebox" href="" style="backround-image: url(./images/haxe.jpg)">
            <h1> Haxe </h1>

        </a>

        <a class="homebox" href="" style="backround-image: url(./images/kaesespaetzle.jpg)">
        <h1> Käsespätzle </h1>

        </a>

        <a class="homebox" href="" style="backround-image: url(./images/weisswurst.jpg)">
        <h1> Weißwurst </h1>

        </a>

        <a class="homebox" href="" style="backround-image: url(./images/schupfnudel.jpg)">
        <h1> Schupfnudel </h1>

        </a>

        <a class="homebox" href="" style="backround-image: url(./images/rouladen.jpg)">
        <h1> Rouladen </h1>

        </a>

        <a class="homebox" href="" style="backround-image: url(./images/apfelkuchen.jpg)">
        <h1> Apfelkuchen </h1>
        </a>



    </section>


        <section class="video" style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)));">
            <video autoplay loop muted id="Video">
                <source src="./videos/introVid.mp4" type="video/mp4"> 
            </video>
          <h2>Freshly Made</h2>
          <p>Our ingredients are grown regionally and selected by hand by our chefs. The dishes are freshly prepared for you after your order and then served at your table. In order to provide you with a high quality diet, we constantly carry out quality controls and support sustainable agriculture.</p>
        </section>
    
    </main>
<?php
    include('./includes/footer.php'); 
?>
