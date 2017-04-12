<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;



use laklak\Model\ArtisteManager;
=======
use laklak\Model\AdminaproposManager;
use laklak\Model\PresentationManager;
>>>>>>> 6bb359b07e350eab2a8568f83f8332b97fae5a39
use laklak\Model\Slider;
use laklak\Model\SliderManager;


class AdminController extends Controller
{

    public function index()
    {
        return $this->getTwig()->render('index.html.twig');
    }


    public function adminapropos()
    {
        $presentationmanager = new PresentationManager();
        if(isset($_POST['enregistrer'])) {
        $presentationmanager->updatePresentation($_POST);
        }
        $presentation = $presentationmanager->textPresentation();
        return $this->getTwig()->render('adminapropos.html.twig', array('presentation' => $presentation));


        $res = new aproposController();
        $resultat = $res->textPresentation();
        return $this->getTwig()->render('adminapropos.html.twig', array('resu' => $resultat));


        
    }




    public function listEvent()
    {
        return $this->getTwig()->render('listEvent.html.twig');
    }

    public function addEvent()
    {
        return $this->getTwig()->render('addEvent.html.twig');

    }

    public function addArtist()
    {
        // si le form est submit, je récupère mon $_POST
        // je fais mon traitement
        // $artist = new Artist()
        // $artist -> setNom($_POST['nom');

        // $artist -> insert();
        // redirect vers la page qui liste les artist $this->listArtist()

        // sinon le form est pas submit, j'affiche le form
        return $this->getTwig()->render('ajoutartistes.html.twig');
    }

    public function updateArtist($id)
    {
        // si le form est submit
        // $artist = findOne($id);
        // comme pour le addArtist
        // $artist->update();
        //  redirect

        // sinon j'affiche le form
       // return $this->getTwig()->render('ajoutartistes.html.twig', array('artist'=>$artist));
    }

    public function deconnexion()
    {
        session_destroy();
        return $this->getTwig()->render('deconnexion.html.twig');
    }


    public function listeevenements()
    {
        return $this->getTwig()->render('listeevenements.html.twig');

    }


    public function modifAccueil()
    {
        $slide = new SliderManager();
        $slides = $slide->selectAllSlide();
        if (isset($_POST['addSlider'])) {
            $slide->addSlide($_POST,$_FILES);
            header('location: ?page=modifAccueil');
        } elseif (isset($_POST['deleteSlider'])) {
            $slide->deleteOneSlide($_POST['id']);
            header('location: ?page=modifAccueil');
        } elseif (isset($_POST['updateSlider'])) {
            $slide->updateSlide($_POST);
            header('location: ?page=modifAccueil');
        }
        return $this->getTwig()->render('modifAccueil.html.twig', array('slides' => $slides));

    }

}