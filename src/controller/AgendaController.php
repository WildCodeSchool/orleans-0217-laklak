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
        $events = new EventManager();
        $events->listAll();
        return $this->getTwig()->render('agenda.html.twig', array(
            'events' => $events
        ));

    }
}