<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;


use laklak\Model\Event;
use laklak\Model\EventManager;

class EventController extends Controller
{

    public function listEvent()
    {   // je vais appeler une méthode de EventManager listAll
        // j'instancie un objet EventManager
        $eventManager = new EventManager();
        // j'applique la méthode listAll à l'objet EventManager que j'envoie dans la variable $events
        $events=$eventManager->listAll('event');
        // j'applique mon objet en cours à la propriété twig à la méthode render
        return $this->twig->render('listEvent.html.twig',array('events'=>$events));
    }

    public function addEvent()
    {
        // si le form est submit, je récupère mon $_POST
        // je fais mon traitement
        // $artist = new Artist()
        // $artist -> setNom($_POST['nom');

        // $artist -> insert();
        // redirect vers la page qui liste les artist $this->listArtist()

        // sinon le form est pas submit, j'affiche le form
        return $this->twig->render('ajoutartistes.html.twig');
    }

    public function updateEvent($id)
    {
        // si le form est submit
        // $artist = findOne($id);
        // comme pour le addArtist
        // $artist->update();
        //  redirect

        // sinon j'affiche le form
        return $this->twig->render('ajoutartistes.html.twig', array('artist'=>$artist));
    }

}