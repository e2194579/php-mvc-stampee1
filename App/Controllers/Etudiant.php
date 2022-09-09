<?php

namespace App\Controllers;

use \Core\View;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class Etudiant extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $liste = \App\Models\Etudiant::getAll();
        View::renderTemplate('Etudiant/index.html', ['etudiants' => $liste]);
    }

    public function addAction()
    {
        if(!empty($_POST)){
            $liste = \App\Models\Etudiant::insert($_POST);
            header("location:/php-mvc/public/Etudiant/index");
            exit();
        }

        View::renderTemplate('Etudiant/add.html', []);
    }

    public function updateAction()
    {
        print_r($this->route_params);
        $id = $this->route_params['id'];
        //Récupere l'étudiant avec $id
        echo "Je suis la méthode modifie de Etudiant Controller";
    }

/*     
    public function detailAction()
    {
        # code...
    }
 */


}
