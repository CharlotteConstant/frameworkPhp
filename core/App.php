<?php

class App
{
    public static function process()
    {
        $controllerName = "home";//a modifier
        $task = "index"; //on peut changer la page par defaut ici

        if(!empty($_GET['controller'])){
            $controllerName = $_GET['controller'];
        }
         if(!empty($_GET['task'])){
            $task = $_GET['task'];
        }
// verifier si controler et task sont pas vide et rempli
       $controllerName = ucfirst($controllerName); //noms des controllers commencent par une majuscule
       $controllerName = "\Controllers\\".$controllerName;
        $controller = new $controllerName(); //instancie le controller
        $controller->$task(); //execute la tache
        //met une chaine de caractère à la place d'une autre
    }
}


?>