<?php

$dsn = "mysql:dbname=classificados;host=localhost";
$dbuser = "bduser";
$dbpass = "shalon";


try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
   
} catch (Exception $ex) {
echo "Falhou!".$ex->getMessage();
}
