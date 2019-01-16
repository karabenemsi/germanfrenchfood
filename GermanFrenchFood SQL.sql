	DROP TABLE IF EXISTS meal_category;
	DROP TABLE IF EXISTS meal;
	DROP TABLE IF EXISTS category;


	CREATE TABLE meal (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(255) NOT NULL,
		trans varchar(255) not null,
		description VARCHAR(2000) NOT NULL,
		image VARCHAR(50),
		price double not null
		
	);

	create table category(
		id int(6) UNSIGNED AUTO_INCREMENT primary key,
		name varchar(30) not null unique
	);

	create table meal_category(
		id_meal int unsigned not null,
		id_category int unsigned auto_increment not null,
		constraint id_meal_ foreign key (id_meal) references meal(id),
		constraint id_category_ foreign key (id_category) references category(id),
		PRIMARY KEY (id_meal, id_category)
	);


	INSERT INTO meal(name,trans,description,image,price) VALUES 
		('Weißwurst','white sausage','Weißwurst is eaten at breakfast as well as at other times of the day. Originally it comes from Bavaria and is also eaten there with pretzels and wheat beer. In recent years it has become more and more popular throughout southern Germany.','./images/dishes/weisswurst.jpg',18.45),
		('Schupfnudel mit Sauerkraut','finger-shaped potato dumplings','Schupfnudeln (potato noodles) or Fingernudeln (finger noodles) are a dish from the South German and Austrian cuisine, which is available in regionally different names, recipes and variations from rye and wheat flour, egg and since the introduction of the potato in the 17th century also with potato dough. They are traditionally shaped by hand. They are often served with sauerkraut, but there are numerous sweet variations. They are comparable with the nocks (Italian gnocchi).','./images/dishes/schupfnudel.jpg',18.45),
		('Dampfnudel mit Vanilesoße','yeast dumpling','Yeast dumpling are a traditional pastry of the South German and Austrian cuisine. It is a preparation of yeast dumplings in which the yeast dough is roasted and steamed simultaneously in a pot with a lid, creating a crispy base and a soft surface. There are steamed noodles with and without filling, whereby the Palatine variant is basically unfilled. ','./images/dishes/dampfnudel.jpg',18.45),
		('Schweins Haxe','Ham hock','The Ham hock is mostly used for hearty, simple dishes, in Berlin for example cooked with pea puree, in Franconia as "Kraut und Knöchla" with sauerkraut and mashed potatoes or bread. For Austrian preparation ("Stelze") it is often pre-cooked in a garlic caraway stock, after which it is placed in the oven or on the grill until the skin is crispy. Stelze is traditionally served with mustard, horseradish and vegetables pickled in vinegar.','./images/dishes/haxe.jpg',18.45),
		('Kassler mit Knödel',' smoked pork','Kasseler is a component of hearty stews, especially in combination with cabbage, but can also be fried, boiled or baked in the oven. Due to the preceding curing and smoking, the cooking time is comparatively short. It is often served with turnips, kale, sauerkraut or boiled potatoes. It is also eaten cold as cold cuts.','./images/dishes/kasslerknoedel.jpg',18.45),
		('Kässpätzle','cheese noodles','With the cheese spaetzle, hot spaetzle and grated hard cheese are alternately layered on top of each other and garnished with roasted onions. To prevent the spaetzle from cooling down and the cheese from melting, the cheese spaetzle are placed in the hot oven after each layer.','./images/dishes/kaesespaetzle.jpg',18.45),
		('Donauwelle','chocolate-covered cake with vanilla pudding and sour cherries','Die Donauwelle ist eine Torte aus Rührteig mit Sauerkirschen, Buttercreme und Kakao. Sie besteht aus hellem und dunklem Teig, der den Wellengang der Donau andeuten soll. Anders als übliche Torten wird die Donauwelle meist auf einem Kuchenblech gebacken und in rechteckigen Stücken serviert.','./images/dishes/donauwelle.jpg',3.45),
		('Ofenschlupfer','Apple Pie','A very common type is the following: Baked rolls are cut and soaked in milk mixed with eggs. The mixture is then placed in a greased casserole dish and filled in layers with grated apples, cinnamon, sugar, almonds and raisins soaked in rum. The last layer must consist of breadcrumbs. The food is baked in the oven at medium heat until golden yellow and then baked again with a snow cap made of beaten egg whites and granulated sugar. The dish is usually served directly after baking with vanilla sauce.','./images/dishes/ofenschlupfer.jpg',3.45),
		('Huître','Oyster', '' , '',18),
	('Foie gras','','Accompanied by toast and green salad.', '',16),
	('Escargots',' ',' Cooking with marbled butters.','',14),
	('Plateau de charcuterie','Cold meats platter ','Accompanied by butter and pickle.','./images/dishes/charcuterie.jpg ',14),
	('Salade de chèvre chaud','Goat salad','',' ',12) ,
	('Salade lyonnaise','Lyonnaise salad','Composed of  eggs, lardons, croutons at olive oil and garlic.','./images/dishes/salade_lyonnaise.jpg ',12),
	('Choucroute','','Composed of cabbage, sausage, potatoes, smoked streaky, pepper.','',20) ,
	('Raclette','','','',18),
	('Tartiflette','','Composed of potatoes, bacon, sour cream and re-blocks.','',22),
	('Fondue Bourguignogne','Bourguignone fondue','Served with beef, chicken and duck fillets.','',18),
	('Fondue savoyarde','Savoyarde fondue','Composed of Beauforts, counted and served with potatoes, pickles and onions.','',20),
	('Magret de canard','Duck breast fillet', 'Served with gratin dauphinois. ','',24),
	('Ratatouille','','Diversity of vegetable (courgette, aubergines, tomatoes).','./images/dishes/ratatouilles.jpg',17),
	('Cuisse de grenouille','Leg of frog','Accompanied by a salad.','./images/dishes/cuisse_de_grenouille.jpg ',19) ,
	('Boeuf Bourguigon','','','./images/dishes/bœuf_bourguignon.jpg ',17) ,
	('Steack tartare','','Chopped with a knife, to be composed by yourself.','./images/dishes/tartare.jpg ',19) ,
	('Escalope milanaise','','Accompanied by pasta.','./images/dishes/escalope_milanaise.jpg ',16.5) ,
	('Plateau de fromage','Cheese platter','Made of reblochon, counted, Savoy tomme, sheeps cheese, Roquefort.','',9),
	('Gâteaux basque','Basque cake', '','./images/dishes/gateaux_basques.jpg ',11) ,
	('Crepes','', 'Different flavours, possibility of whipped cream supplements and/or chocolate coulis.','./images/dishes/crepe_sucree.jpg ',10) ,
	('Tarte au pommes','Apple pie','With whipped cream and vanilla ice cream.','./images/dishes/tarte_aux_pommes.jpg ',12) ,
	('Fondant au chocolat','Chocolate fondant','With a drizzle of custard.','./images/dishes/fondant_au_chocolat.jpg ',12) ,
	('Millefeuille','','','./images/dishes/millefeuille.jpg ',13) ,
	('Flan','Custard','','./images/dishes/flan.jpg ',11) ,
	('Crumble','Crumble','','',12),
	('Tropezienne','','','',13),
	('Charlotte aux fraises','Strawberry charlotte','','',13),
	('Café gourmand','Coffe with dessert selection ','Cannelé, chocolate éclair, chouquette, mini croissant.','',11.5),
	('Moules','mussels','','./images/dishes/moules.jpg ',21) ,
	('Tarte aux onions','Onion tart','','',12) ,
	('Salade basque','Basque salad','','./images/dishes/salade_basquaise.jpg ',7),
	('Salade aux champignons','Mushrooms salad','','./images/dishes/salade.jpg ',8) ,
	('Galette de sarasin','Buckwheat pancake ','','./images/dishes/galette.jpg ',13) ,
	('Flammenkueche','','','./images/dishes/flammenkueche.jpg ',13), 
	('Quiche lorraine','','','./images/dishes/quiche_lorraine.jpg ',12) ,
	('Quenelle','Dumplings in sauce','','./images/dishes/quennelle.jpg ',15) ,
	('Confit de canard','Confit of Duck','','./images/dishes/canard_confit.jpg ',17) ,
	('Croque-monsieur','','','./images/dishes/croque_monsieur.jpg ',12) ,
	('Tarte tatin','','','./images/dishes/tarte-tartin.jpg ',12.5) ,
	('Bugnes','','','./images/dishes/bugnes.jpg ',5.5) ,
	('Kouglof','','','./images/dishes/kouglofs.jpg ',6.5) ,
	('Tarte aux mirabelles','Mirabelle plum pies','','./images/dishes/tarte mirabelle.jpg ',6.5);

	INSERT INTO category(name) VALUES ('French'),('German'),('Vegetarian');

	INSERT INTO meal_category(id_meal,id_category) VALUES
	(1,2),
	(2,2),
	(2,3),
	(3,2),
	(3,3),
	(4,2),
	(5,2),
	(6,2),
	(6,3),
	(7,2),
	(7,3),
	(8,2),
	(8,3),
	(9,1),
	(10,1),
	(11,1),
	(12,1),
	(13,1),(13,3),
	(14,1),
	(15,1),
	(16,1),(16,3),
	(17,1),
	(18,1),
	(19,1),(19,3),
	(20,1),
	(21,1),(21,3),
	(22,1),
	(23,1),
	(24,1),
	(25,1),
	(26,1),(26,3),
	(27,1),(27,3),
	(28,1),(28,3),
	(29,1),(29,3),
	(30,1),(30,3),
	(31,1),(31,3),
	(32,1),(32,3),
	(33,1),(33,3),
	(34,1),(34,3),
	(35,1),(35,3),
	(36,1),(36,3),
	(37,1),(37,3),
	(38,1),(38,3),
	(39,1),
	(40,1),(40,3),
	(41,1),
	(42,1),
	(43,1),
	(44,1),(44,3),
	(45,1),
	(46,1),
	(47,1),(47,3),
	(48,1),(48,3),
	(49,1),(49,3),
	(50,1),(50,3);


