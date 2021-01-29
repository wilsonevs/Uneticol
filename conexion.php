<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="Pilotof1";
$dbname="uneticol";

try {
    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>