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
    public function agenda()
    {

        return $this->twig->render('agenda.html.twig');

    }
}