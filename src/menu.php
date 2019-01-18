    <?php
    define('HOME_SITE', false);
    include('./includes/database.php');
    include('./includes/header.php');


?>
    <main class="menus-main">

	<section class="title">
			<h1>Menus</h1>
		</section>
		<section>
			<div class="menu-item breton">
<h2 onclick="myFunction('brittany_text')">Breton Menu</h2>
			</div>
      
     	 	<p class='menus' id="brittany_text">
       			Brittany menu at 25.00 €</br>
Brittany is a region in the North-West of France. It borders the coasts of England and was a migration destination for Celtic populations. 
The Virgin Islands are located between the Celtic Sea and the English Channel. </br>
But one of this country’s interesting side is the Lighthouse. This Lighthouse is one of the best known in Brittany and is the highest lighthouse in the world (82.5m). It sweeps all of northern Finistère (the region where it is located) within 52 km radius thanks to its height. It has been classified as a historic monument since 23 May 2011.
Brittany is rich in a wide variety of culinary specialties such as buckwheat pancakes (also called buckwheat), Breton pancakes (also called Breton pancakes with wheat flour), and seafood caught on the coast.</br>
A starter based on mussels seasoned with garlic and parsley.</br>
As main course a buckwheat cake with a choice of ingredients:</br>
	- Mushrooms,</br>
	- Salmon with cream and chives,</br>
	- Ham, an egg and Emmental cheese (French cow cheese).</br>
For dessert 1 sweet pancake with a choice of toppings:</br>
	- nutella, </br>
	- sugar,</br>
	- jam,</br>
	- chestnut cream</br>
It is possible to take as a supplement: whipped cream and/or chocolate coulis or red fruit coulis.</br>
As with all the other menus, you can also have a plate of regional cheeses.</br>
     	 	</p>


			<div class="menu-item alsace">
				<h2 onclick="myFunction('alsace_text')">Alsace - Lorraine Menu</h2>
			</div>

			<p class='menus' id="alsace_text">
				Menu Alsace - Lorraine (in German Elsaß-Lothringen) at 25.00 €</br>
Alsace - Lorraine is a region in the North-East of France, it forms part of the border with Germany. This region was under German rule from 1871 to 1918, which is why part of the population speaks German. Place Stanislas in Nancy is one of the most attractive places in the region. This place is also classified as a UNESCO World Heritage Site.</br>

As a starter: an onion pie.  Strange starter and main course = onion pie.</br>
As a main course: you can choose between a Flammenkueche (onion pies with bacon and fresh cream) and a Quiche Lorraine (pie with bacon, eggs and fresh cream).</br>
For dessert: a Kougelhopf, a traditional cake. There may be some alcohol, not recommendable for children.</br>
As with all the other menus, you can also have a plate of the french different kind of cheeses. </br>
			</p>
			<div class="menu-item lyon">
					<h2 onclick="myFunction('lyon_text')">Lyonnais Menu</h2>
			</div>

			<p class='menus' id="lyon_text">
				Lyon menu at 28.00 € </br>
Lyon is one of the largest and most beautiful cities in France. It is known for its cafés and theatres in old Lyon, the Guignols (puppets created around 1808) and especially for its festival of lights which takes place every early December.
It is located in the Rhône-Alpes region.</br>
As a starter: a typical dish of Lyon's corks (a name given to the Lyon restaurant): a Lyon salad composed of croutons, bacon, eggs and of course green salad.</br>
As a main course: we offer you pike quenelles.</br>
For dessert: an apple, pear or apricot tart tatin.</br>
As with all the other menus, you can also take a plate of regional cheeses, including Mont d'Or.</br>
			</p>


			<div class="menu-item aquitaine">
					<h2 onclick="myFunction('aquitaine_text')">Aquitaine Menu</h2>
			</div>
				<p class='menus' id="aquitaine_text">
					Aquitaine menu at 29.00 €</br>
Aquitaine is located in the extreme southwest of France.  This region is bordered to the west by the Atlantic Ocean and to the south by one of France's largest mountain ranges: the Pyrenees. These two elements make the region very attractive for extreme sports such as surfing and skiing. The Pyrenees form the natural border with Spain and the Atlantic Ocean makes surfing easier thanks to the strong currents that create strong waves.</br>
In addition, it is a tourist attraction for its landscape with the dune du pilat (height in 2018, 106.6 m).</br>
In terms of cuisine, Bordeaux is one of the wine capitals of France.</br>
As a starter: we offer you a Basque salad made with duck or goose gizzards and other ingredients that vary according to the recipe.</br>
As a main course: our chef will make you a duck confit on his bed of mashed potatoes, accompanied by a few salad leaves. </br>  
For dessert in this gourmet meal, a homemade Basque cake.</br>
As with all the other menus, you can also have a plate of regional cheeses.</br>
				</p>
			<div class="menu-item paris">
			<h2 onclick="myFunction('paris_text')">Parisian Menu</h2>
			</div>

			<p class='menus' id="paris_text">
		Parisian Menu 25.00 € :</br>
Paris is in the center of France, it is the capital of France. La Tour Eiffel, les Champs Elysées, l’Arc de Triomphe and other monuments are the charm of this one. Thanks to them, it is one of the world's tourism capitals. </br>
The city of love and chic, foreigners go to the art bridge also known as the padlock bridge to hang theirs to represent their eternal love.</br>
As a starter: we offer you a salad with mushrooms.</br>
As a main course: A croque-monsieur covered with melt-in-the-mouth Gruyère made with toasted sandwich bread and inside with Paris ham and béchamel sauce. All this on a bed of green salad.</br>
For dessert: A typically French dessert made by the best pastry chefs, the millefeuille.</br>
As with all other menus, you can also have a cheese platter.</br>
		</p>

			<p class='menus' id="paris_text">
		Parisian Menu 25.00 € :</br>
Paris is in the center of France, it is the capital of France. La Tour Eiffel, les Champs Elysées, l’Arc de Triomphe and other monuments are the charm of this one. Thanks to them, it is one of the world's tourism capitals. 
The city of love and chic, foreigners go to the art bridge also known as the padlock bridge to hang theirs to represent their eternal love.</br>
As a starter: we offer you a salad with mushrooms.</br>
As a main course: A croque-monsieur covered with melt-in-the-mouth Gruyère made with toasted sandwich bread and inside with Paris ham and béchamel sauce. All this on a bed of green salad.</br>
For dessert: A typically French dessert made by the best pastry chefs, the millefeuille.</br>
As with all other menus, you can also have a cheese platter.
		</p>

			<div class="menu-item savoie">
				<h2 onclick="myFunction('savoie')">Savoyard Menu</h2>
				
			</div>


			<p class='menus' id="savoie">
		Savoyard Menu 32.00 € :</br>
Savoie marks the border with Switzerland and Italy thanks to the Alps mountain range. The Alps are home to the highest peak in France, Mont Blanc. This department is very attractive, especially for winter sports.</br>
The Aiguille du Midi offers a magnificent panoramic view of Mont Blanc and even allows you to cross it.
As an appetizer: A delicatessen platter from the region's farms.</br>
As a main course: You can have a tartiflette that is made from potatoes, bacon, onions and reblochon. Or a Savoyard fondue which is a dish of melted cheeses where pieces of bread are dipped.</br>
For dessert: There are bugnes, small cakes made of fried and baked sweet pasta with a sprinkle of sugar as the final touch.</br>
In the fondue and the bugnes there is alcohol so this menu is not recommended for children.</br>
Of course, as with all the other menus, you can also have a cheese platter, which in this case will be made from Savoyard cheeses.</br>

		</p>
			
		</section>
		

		<script>
		function myFunction(variable) {
		  var x = document.getElementById(variable);
		  if (x.style.display === "none") { 
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
		</script>
    
    </main>
<?php
    include('./includes/footer.php'); 
?>
