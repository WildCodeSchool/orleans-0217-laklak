<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;


use laklak\Model\Event;

class EventController extends Controller
{

    public function listEvent()
    {
        $events = new Event();
        $events = $this->findAll('event');
        return $this->twig->render('listEvent.html.twig');
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