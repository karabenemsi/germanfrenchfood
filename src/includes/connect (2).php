<?php 

$dbname="ww07";//le nom de ta base de donnée or database name
$host="localhost";//presque tout le temps localhost or almost all the time localhost
$user="ww07";// le login de ta BDD or the login of the database
$pwd="5KX3LeRB";//le mot de passe de ta BDD or password of the database

$db = new PDO("mysql:dbname=$dbname;host=$host",$user,$pwd);//pour obtenir ta chaine de connection or obtaining the chain of connexion

$query = $db->prepare("SELECT * FROM CLIENT WHERE age > ?");//ta requette SQL ? corespond a une valeure que tu passe plus tard dans "execute" kinda the SQL test 

$query->execute(['19']);//remplace les ? par la valeur dans le tableau "age = ? and id = ?" => [19, 154]
var_dump($query);//pour voir la requette et son état (complexe)

$data = $query->fecthAll();//ou fetch dans un while pour faire du ligne par ligne
var_dump($data);//pour voir les données retournées

var_dump($db->errorInfo());//pour avoir les éventuelles érreures sur la dernière requette effectué