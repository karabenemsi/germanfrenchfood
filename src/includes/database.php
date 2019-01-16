<?php




	try {
    $base = new PDO('mysql:host=localhost;dbname=ww07;charset=utf8', "ww07", "5KX3LeRB");
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
 	}