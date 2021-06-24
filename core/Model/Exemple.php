<?php

namespace Model;
require_once "core/autoloading.php";

class Exemple //extends Model si besoin
{
    protected $table = "exemples";

    //toutes les fonctions qui sont propres à notre class

    /**
     * ex:trouve toutes les recettes pour une pizza
     */

     /*
     public function findAllPizza(int $pizza_id){
         $requete = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE pizza_id=:pizza_id);
         $requete->execute(['pizza_id => $pizza_id]);
         $recettes = $maRequete->fetchAll();
         return $recettes;
     }
     */ 
}


?>