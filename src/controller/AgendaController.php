<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/04/17
 * Time: 16:57
 */

namespace laklak\controller;


use laklak\Model\EventManager;

class AgendaController extends Controller
{
    public function Agenda()
    {
        $event = new EventManager();
        $eventsYear=$event->formatEventsByYear();
        $annee = '';
        if (isset($_GET['annee'])){
            $annee = $_GET['annee'];
        }

        return $this->getTwig()->render('agenda.html.twig', array(
            'eventsYear' => $eventsYear,
            'annee' => $annee,
        ));

    }
}