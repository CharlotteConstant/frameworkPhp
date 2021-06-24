<?php

namespace Controllers;

class Home // extends Controller (si besoin d'un model)
{
    //protected $modelName = \Model\Home::class; (si model)

    /**
     * 
     * affiche accueil du framework
     */

     public function index()
     {
         $message= "bienvenue dans la documentation";
         $titreDeLaPage = "accueil du framework";
         $messageChangeable = "Bonjour";
//on check si y'a bien quelque chose dans le form
         if(!empty($_POST['messageChangeable'])){
             $messageChangeable = $_POST['messageChangeable'];
         }
        //render du template
         \Rendering::render('home/home', compact('message', 'titreDeLaPage','messageChangeable'));
     }

     /**
      * 
      *Mettre ici les autres function comme create, suppr, edit
      */

      /**
       * ex modifier une pizza
       */
    /*
    public function edit()
    {
        if(!empty($_POST['name']) && !empty($_POST['gout']) && !empty($_POST['id']) && ctype_digit($_POST['id'])){
            $pizza_id = $_POST['id'];
            $name = htmlspecialchars($_POST['name']);
            $gout = htmlspecialchars($_POST['gout']);

            $this->model->update($name, $gout, $pizza_id);

            \Http::redirect("index.php?controller=pizza&task=show&id=$pizza_id");

        }else{
            die("tu fais quoi");
        }
    }

    }*/
}



?>