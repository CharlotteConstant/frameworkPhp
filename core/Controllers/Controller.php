<?php

namespace Controllers;
/**
 * 
 * class controller (evite repetition du $model) et qui permet dans les autres controller de faire un $modelName pour recupérer la class du model
 */
abstract class Controller
{
    protected $model;
    protected $modelName;

        public function __construct(){
            $this->model = new $this->modelName();
        }



}


?>