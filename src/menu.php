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
				<h2 onclick="myFunction()">Breton Menu</h2>
			</div>

			<div class="menu-item alsace">
				<h2 onclick="myFunction()">Alsace - Lorraine Menu</h2>
			</div>

			<div class="menu-item lyon">
				<h2 onclick="myFunction()">Lyonnais Menu</h2>
			</div>

			<div class="menu-item aquitaine">
				<h2 onclick="myFunction()">Aquitaine Menu</h2>

				
			</div>
			<div class="menu-item paris">
				<h2 onclick="myFunction('paris_text')">Parisian Menu</h2>
			
			</div>

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
