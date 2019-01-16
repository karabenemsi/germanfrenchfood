DROP TABLE if EXISTS meal_category;
DROP TABLE if EXISTS meal_ingr;
DROP TABLE if EXISTS Meal;
DROP TABLE if EXISTS category;
DROP TABLE if EXISTS ingridients;


CREATE TABLE Meal (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	trans varchar(30) not null,
	description VARCHAR(30) NOT NULL,
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
	constraint id_meal_ foreign key (id_meal) references Meal(id),
	constraint id_category_ foreign key (id_category) references category(id),
	PRIMARY KEY (id_meal, id_category)
);


INSERT INTO MEAL(name,trans,description,image,price) VALUES 
	('Weißwurst','white sausage','Weißwurst is eaten at breakfast as well as at other times of the day. Originally it comes from Bavaria and is also eaten there with pretzels and wheat beer. In recent years it has become more and more popular throughout southern Germany.','image/weisswurst.jpg',18.45),
	('Schupfnudel mit Sauerkraut','finger-shaped potato dumplings','Schupfnudeln (potato noodles) or Fingernudeln (finger noodles) are a dish from the South German and Austrian cuisine, which is available in regionally different names, recipes and variations from rye and wheat flour, egg and since the introduction of the potato in the 17th century also with potato dough. They are traditionally shaped by hand. They are often served with sauerkraut, but there are numerous sweet variations. They are comparable with the nocks (Italian gnocchi).','image/schupfnudel.jpg',18.45),
	('Dampfnudel mit Vanilesoße','yeast dumpling','Yeast dumpling are a traditional pastry of the South German and Austrian cuisine. It is a preparation of yeast dumplings in which the yeast dough is roasted and steamed simultaneously in a pot with a lid, creating a crispy base and a soft surface. There are steamed noodles with and without filling, whereby the Palatine variant is basically unfilled. ','image/dampfnudel.jpg',18.45),
	('Schweins Haxe','Ham hock','The Ham hock is mostly used for hearty, simple dishes, in Berlin for example cooked with pea puree, in Franconia as "Kraut und Knöchla" with sauerkraut and mashed potatoes or bread. For Austrian preparation ("Stelze") it is often pre-cooked in a garlic caraway stock, after which it is placed in the oven or on the grill until the skin is crispy. Stelze is traditionally served with mustard, horseradish and vegetables pickled in vinegar.','image/haxe.jpg',18.45),
	('Kassler mit Knödel',' smoked pork','Kasseler is a component of hearty stews, especially in combination with cabbage, but can also be fried, boiled or baked in the oven. Due to the preceding curing and smoking, the cooking time is comparatively short. It is often served with turnips, kale, sauerkraut or boiled potatoes. It is also eaten cold as cold cuts.','image/kasslerknoedel.jpg',18.45),
	('Kässpätzle','cheese noodles','With the cheese spaetzle, hot spaetzle and grated hard cheese are alternately layered on top of each other and garnished with roasted onions. To prevent the spaetzle from cooling down and the cheese from melting, the cheese spaetzle are placed in the hot oven after each layer.','image/kaesespaetzle.jpg',18.45),
	('Donauwelle','chocolate-covered cake with vanilla pudding and sour cherries','Die Donauwelle ist eine Torte aus Rührteig mit Sauerkirschen, Buttercreme und Kakao. Sie besteht aus hellem und dunklem Teig, der den Wellengang der Donau andeuten soll. Anders als übliche Torten wird die Donauwelle meist auf einem Kuchenblech gebacken und in rechteckigen Stücken serviert.','image/donauwelle.jpg',3.45),
	('Ofenschlupfer','Apple Pie','A very common type is the following: Baked rolls are cut and soaked in milk mixed with eggs. The mixture is then placed in a greased casserole dish and filled in layers with grated apples, cinnamon, sugar, almonds and raisins soaked in rum. The last layer must consist of breadcrumbs. The food is baked in the oven at medium heat until golden yellow and then baked again with a snow cap made of beaten egg whites and granulated sugar. The dish is usually served directly after baking with vanilla sauce.','image/ofenschlupfer.jpg',3.45);

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
(8,3);
