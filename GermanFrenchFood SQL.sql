CREATE TABLE Meal (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(30) NOT NULL,
	Trans varchar(30) not null,
	discription VARCHAR(30) NOT NULL,
	image VARCHAR(50),
	price int not null
	ID_Category int unsigned not null,
	CONSTRAINT category_ foreign key (ID_Category) references category(id),
	
) 

create table category(
id int(6) UNSIGNED AUTO_INCREMENT primary key,
name varchar(30) not null unique
)

create table meal_category(
id int unsigned auto_increment primary key,
id_meal int unsigned not null,
id_category int unsigned auto_increment not null,
constraint id_meal_ foreign key (id_meal) references Meal(id),
constraint id_category_ foreign key (id_category) references category(id)
constraint meal_category_ unique (id_meal, id_category)
)

create table ingridients(
	id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name varchar(30) not null
)

create table Meal_Ingr(
	id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_meal int UNSIGNED not null,
	id_ingridients int unsigned not null,
	CONSTRAINT id_ingridients_ foreign key (id_ingridients) references ingridients(id),
  CONSTRAINT ID_MEAL_ foreign key (id_meal) references Meal(id),
  CONSTRAINT MEAL_INGREDIENTS_ UNIQUE (id_meal, id_ingridients)
)

