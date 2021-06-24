<?php

/**
 * Connexion à la base de données
 * 
 * 
 */

 class Database
 {
    public static function getPdo(){

    $pdo = new PDO('mysql:host=localhost;dbname=garages', "chacha", "0605", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
    }
 }




?>