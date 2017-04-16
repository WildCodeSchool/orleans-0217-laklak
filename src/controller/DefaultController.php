<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 10:04
 */

namespace laklak\controller;


use laklak\Model\Event;
use laklak\Model\PresentationManager;
use laklak\Model\SliderManager;
use laklak\Model\EventManager;

class DefaultController extends Controller
{
    public function apropos()
    {
        $presentation = new PresentationManager();
        $about = $presentation->textPresentation();
        return $this->getTwig()->render('apropos.html.twig',array('presentation' => $about));
    }

    public function liste_artistes()
    {
        return $this->getTwig()->render('liste_artistes.html.twig');
    }

//    public function evenements($id)
//    {
//        $evt = new EventManager();
//        $event=$evt->showOneEvent($id);
//        return $this->getTwig()->render('evenements.html.twig',array('event'=>$event));
//    }

    public function liste_evenements()
    {
        return $this->getTwig()->render('liste_evenements.html.twig');
    }

    public function artistes()
    {
        return $this->getTwig()->render('artistes.html.twig');
    }

    public function contact()
    {
        return $this->getTwig()->render('contact.html.twig');
    }

    public function index()
    {
        $slide = new SliderManager();
        $slides = $slide->selectAllSlide();
        return $this->getTwig()->render('index.html.twig', array('sliders' => $slides));
    }

    public function agenda()
    {

        return $this->getTwig()->render('agenda.html.twig');

    }
    public function connexion()
    {

        return $this->getTwig()->render('connexion.html.twig');

    }

}
