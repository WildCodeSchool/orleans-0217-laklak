<?php

namespace laklak\controller;

require __DIR__ .'/../../app/config/connect.php';


class Controller
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;
    /**
     * @var \PDO
     */
    protected $bdd;


    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../src/ressources/views');
        $twig = new \Twig_Environment($loader, [

            'cache' => false, //__DIR__ . 'tmp'
            'debug' => true

        ]);
        $twig->addExtension(new \Twig_Extension_Debug());
        $this->twig = $twig;
        $this->bdd = new \PDO(DSN,USER,PASS);
    }
}