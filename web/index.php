<?php
session_start();
require '../vendor/autoload.php';
use laklak\controller\DefaultController;
use laklak\controller\AdminController;
use laklak\controller\EventController;
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
            $defaultEvent = new EventController(false);

            $defaultArtist = new ArtistController(false);


            $presentation = new \laklak\controller\PresentationController(false);


            $adminAccueil = new \laklak\controller\SliderController(false);

            $gestionAdmin = new \laklak\controller\AdministrateurController(false);



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
                    $view = $defaultEvent->listEvent();
                    break;
                case 'addEvent':
                    $view = $defaultEvent->addEvent();
                    break;
                case 'updateEvent':
                    $view = $defaultEvent->updateEvent();
                    break;
                case 'deleteEvent':
                    $view = $defaultEvent->deleteEvent($_GET['id']);
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
                case 'updateartist':
                    $view = $defaultArtist->updateArtist();
                    break;
                case 'gestionAdmin':
                    $view = $gestionAdmin->Admin();
                    break;
                default:
                    $view = $default->index();

            }
            echo $view;
        } //Sinon, on redirige l'utilisateur vers les pages du front
        else {


            $default = new DefaultController(true);
            $contact = new \laklak\controller\ContactController(true);
            $defaultEvent = new EventController(true);
            $defaultArtist = new ArtistController(true);


            switch ($page) {
                case 'apropos':
                    $view = $default->apropos();
                    break;
                case 'liste_artistes':
                    $view = $defaultArtist->listeArt();
                    break;
                case 'liste_evenements':
                    $view = $defaultEvent->listeEvenements();
                    break;
                case 'evenements':
                    $view = $defaultEvent->evenements($_GET['id']);
                    break;
                case 'contact':
                    $view = $contact->contact();
                    break;
                case 'agenda':
                    $view = $default->agenda();
                    break;
                case 'artistes':
                    $view = $defaultArtist->artist($_GET ['id']);
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


