<?php
	try {
    // $db = new PDO('mysql:host=localhost;dbname=ww07;charset=utf8', "ww07", "5KX3LeRB");
    $db = new PDO('mysql:host=localhost;dbname=germanfrenchfood;charset=utf8', "root", "");
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
 	}
?>