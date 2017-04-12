<?php
session_start();
require '../vendor/autoload.php';
use laklak\controller\DefaultController;
use laklak\controller\AdminController;
use laklak\controller\ArtistController;


if (isset($_POST['email']) && isset($_POST['mdp'])){
    $user = $_POST['email'];
    $mdp = $_POST['mdp'];
    $admin = new \laklak\controller\ConnexionController();
    $admin->connexion($_POST);
}

$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}



//Si l'admin est connecté (simulé par le Get['id'] )
//On redirige l'admin vers les pages admin
        if (isset($_SESSION['email'])) {

            $default = new AdminController(false);

            $presentation = new \laklak\controller\PresentationController(false);


            $adminAccueil = new \laklak\controller\SliderController(false);
            $defaultArtist = new \laklak\controller\ArtistController(false);



            switch ($page) {
                case 'index':
                    $view = $default->index();
                    break;
                case 'agenda':
                    $view = $default->index();
                    break;
                case 'ajoutartistes':
                    $view = $defaultArtist->addArtist();
                    break;
                case 'adminapropos':
                    $view = $presentation->adminapropos();
                    break;
                case 'listeartistes':
                    $view = $defaultArtist->listArtist();
                    break;
                case 'listEvent':
                    $view = $default->listEvent();
                    break;
                case 'addEvent':
                    $view = $default->addEvent();
                    break;
                case 'deconnexion':
                    $view = $default->deconnexion();
                    break;
                case 'modifAccueil':
                    $view = $adminAccueil->modifAccueil();
                    break;
                case 'deleteartistes':
                    $view = $defaultArtist->deleteArtist();
                    break;

                default:
                    $view = $default->index();

            }
            echo $view;
        } //Sinon, on redirige l'utilisateur vers les pages du front
        else {


            $default = new DefaultController(true);

            switch ($page) {
                case 'apropos':
                    $view = $default->apropos();
                    break;
                case 'liste_artistes':
                    $view = $default->liste_artistes();
                    break;
                case 'liste_evenements':
                    $view = $default->liste_evenements();
                    break;
                case 'evenements':
                    $view = $default->evenements();
                    break;
                case 'contact':
                    $view = $default->contact();
                    break;
                case 'agenda':
                    $view = $default->agenda();
                    break;
                case 'artistes':
                    $view = $default->artistes();
                    break;
                case 'connexion':
                    $view = $default->connexion();
                    break;
                case 'index':
                    $view = $default->index();
                    break;

                default :
                    $view = $default->index();
            }
            echo $view;
}


