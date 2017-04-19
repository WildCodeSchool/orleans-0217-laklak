<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 19/04/17
 * Time: 13:02
 */

    public function addEvent()
    {
        // si le form est submit, je récupère mon $_POST
        if (isset($_POST['addEvent'])){
            $event = new EventManager();
            $event->addEvent($_POST,$_FILES);
        // redirect vers la page qui liste les artist $this->listArtist()
            header('Location:?page=listEvent');
        }
        // sinon le form est pas submit, j'affiche le form
        else{
            return $this->getTwig()->render('addEvent.html.twig');
        }

    }

    public function updateEvent($id)
    {
        $evt = new EventManager();

        if (isset($_POST['updateEvent'])) {

            $evt->updateEvent($id,$_POST,$_FILES);
            header('Location:?page=listEvent');
        }

        $event=$evt->showOneEvent($id);
        return $this->getTwig()->render('editEvent.html.twig',array('event'=>$event));
    }
