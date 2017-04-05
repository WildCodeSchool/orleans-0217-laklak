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
        return $this->twig->render('index.html.twig');
    }
}