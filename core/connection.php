<?php

try{
     $dsn = "mysql:host=".$DB["HOSTNAME"].";dbname=".$DB["DBNAME"].";cahrset=utf8mb4";
     $conn = new PDO($dsn,$DB["USERNAME"],$DB["PASSWORD"]);
} catch(Exception $error){
     die("Error: ".$error->getMessage());
}