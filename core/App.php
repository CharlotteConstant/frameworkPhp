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
       $controllerName = ucfirst($controllerName);
       $controllerName = "\Controllers\\".$controllerName;
        $controller = new $controllerName();
        $controller->$task();
        //met une chaine de caractère à la place d'une autre
    }
}


?>