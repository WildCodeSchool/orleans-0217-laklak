<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 10:04
 */

namespace laklak\controller;


class DefaultController extends Controller
{

    public function presentation()
    {
        return $this->twig->render('presentation.html.twig');
    }

    public function liste_artistes()
    {
        return $this->twig->render('liste_artistes.html.twig');
    }

    public function evenements()
    {
        return $this->twig->render('evenements.html.twig');
    }

    public function liste_evenements()
    {
        return $this->twig->render('liste_evenements.html.twig');
    }

    public function artistes()
    {
        return $this->twig->render('ajoutartistes.html.twig');
    }

    public function contact()
    {
        return $this->twig->render('contact.html.twig');
    }

    public function index()
    {
        return $this->twig->render('index.php.twig');
    }


    public function agenda()
    {

        return $this->twig->render('agenda.html.twig');

    }

}
