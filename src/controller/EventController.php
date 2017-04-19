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
    {
        // je vais appeler une méthode de EventManager listAll
        // j'instancie un objet EventManager
        $event = new EventManager();
        // j'utilise la méthode listAll de l'objet EventManager,
        // j'enregistre le résultat dans la variable $events
        $events = $event->listAll();
        // j'invoque la méthode render de mon objet contenu dans ma propriété twig
        // de l'instance de la classe EventController
        return $this->getTwig()->render('listEvent.html.twig',array('events'=>$events));
    }


    public function addEvent()
    {
        // si le form est submit, je récupère mon $_POST
        if (isset($_POST['addEvent'])){
            $event = new EventManager();
            $event->reArrayFiles($_POST,$_FILES);
            // redirect vers la page qui liste les artist $this->listArtist()
            header('Location:?page=listEvent');
        }
        // sinon le form est pas submit, j'affiche le form
        else{
            return $this->getTwig()->render('addEvent.html.twig');
        }
    }
    public function updateEvent()
    {
        $evt = new EventManager();
        if (isset($_POST['updateEvent'])) {
            $evt->updateEvent($_POST, $_FILES);
            header('Location:?page=listEvent');
        } elseif (isset($_GET['id'])) {
            $event=$evt->showOneEvent($_GET['id']);
            return $this->getTwig()->render('addEvent.html.twig', array('event' => $event));
        }
        header('Location:?page=listEvent');
    }


    public function deleteEvent($id)
    {
        $event = new EventManager();
        $event->deleteEvent($id);

        header('Location:?page=listEvent');

    }

    public function evenements($id)
    {
        $evt = new EventManager();
        $event=$evt->showOneEvent($id);
        return $this->getTwig()->render('evenements.html.twig',array('event'=>$event));
    }

    public function listeEvenements()
    {
        $event = new EventManager();
        $eventsYear=$event->formatEventsByYear();

        return $this->getTwig()->render('liste_evenements.html.twig',array('eventsYear'=>$eventsYear));
    }



}