<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName = "ww07";

// $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName;

 $db = new PDO('mysql:host=localhost;dbname=germanfrenchfood', $dbUsername, $dbPassword);

 //TODO Catch errors


?>