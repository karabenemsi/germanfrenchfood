DROP TABLE meal_category;
DROP TABLE meal_ingr;
DROP TABLE Meal;
DROP TABLE category;
DROP TABLE ingridients;


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

create table ingridients(
	id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name varchar(30) not null
);

create table Meal_Ingr(
	id_meal int UNSIGNED not null,
	id_ingridients int unsigned not null,
	CONSTRAINT id_ingridients_ foreign key (id_ingridients) references ingridients(id),
  	CONSTRAINT id_meal_ing_ foreign key (id_meal) references Meal(id),
  	PRIMARY KEY (id_meal, id_ingridients)
);


INSERT INTO MEAL(name,trans,description,image,price) VALUES 
	('Weißwurst','white sausage','Some Description','image/weisswurst.jpg',18.45),
	('Schupfnudel mit Sauerkraut','finger-shaped potato dumplings','lecker!','image/schupfnudel.jpg',18.45),
	('Dampfnudel mit Vanilesoße','yeast dumpling','Yeast dumpling, usually sweet but in some regions of Germany also saltyn.','image/dampfnudel.jpg',18.45);
	('Schweins Haxe','Ham hock','The knuckle is served with potato salad and is mainly eaten in southern Germany.','image/haxe.jpg',18.45);
	('Elsässer Flammkuchen','Alsace Tarte Flambée','This dish is looking like pizza and is made with Sour cream, leeks and onions. It´s a German and French dish, too.','image/flammkuchen.jpg',18.45);
	('Kässpätzle','cheese noodles','Kässspätzle are a speciality of the swabian alb, the Spätzle are noodles wich are made of eggs, water and flour. Wich are very special for this part of germany.','image/kaesespaetzle.jpg',18.45);


INSERT INTO category(name) VALUES ('French'),('German'),('Vegetarian');

INSERT INTO meal_category(id_meal,id_category) VALUES
(1,1),
(2,2),
(3,2),
(1,3);

INSERT INTO ingridients (name) VALUES 
('meat'),('eggs'),('gluten');

INSERT INTO meal_ingr(id_meal, id_ingridients) VALUES
(1,1),
(1,2),
(1,3),
(2,2),
(2,3),
(3,1);

