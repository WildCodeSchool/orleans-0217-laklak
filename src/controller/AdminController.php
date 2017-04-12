<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;

class AdminController extends Controller
{

    public function index()
    {
        return $this->getTwig()->render('index.html.twig');
    }

    public function listEvent()
    {
        return $this->getTwig()->render('listEvent.html.twig');
    }

    public function addEvent()
    {
        return $this->getTwig()->render('addEvent.html.twig');

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
}