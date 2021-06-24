<?php

namespace Model;

abstract class Model{
    protected $pdo;
    protected $table;

    public function __construct(){
        
    $this->pdo = \Database::getPdo();
    }

// function generiques

/**
 * trouver un item par son id
 * renvoie un tableau contenant un item ou un booleen
 * si inexistant
 * @param integer $id
 * @return array|bool
 * 
 */
public function find(int $id) 
{
   
    $maRequete = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id =:id");

    $maRequete->execute(['id' => $id]);

    $item = $maRequete->fetch();

    return $item;
}

    /**
 * renvoie un tableau contenant tous les items
 * de la table garages
 * @return array
 */

public function findAll() : array 
{
    
    $resultatRequete = $this->pdo->query("SELECT * FROM {$this->table}");

    $items = $resultatRequete->fetchAll();

    return $items;
}




/**
 * supression d'un item via son id
 * @param integer $id
 * @return void
 * 
 */

public function delete(int $id): void
{
    

    $maRequete = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id =:id");

    $maRequete->execute(['id' => $id]);
}

}

?>