<?php

namespace laklak\controller;


class Controller
{

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @return \Twig_Environment
     */
    public function getTwig()
    {
        return $this->twig;
    }

    /**
     * @param \Twig_Environment $twig
     * @return Controller
     */
    public function setTwig(\Twig_Environment $twig)
    {
        $this->twig = $twig;
        return $this;
    }


    public function __construct($route = true)
    {
        if ($route){
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../src/ressources/views/front');
        } else {
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../src/ressources/views/admin');
        }
        $twig = new \Twig_Environment($loader, [

            'cache' => false, //__DIR__ . 'tmp'
            'debug' => true

        ]);
        $twig->addExtension(new \Twig_Extension_Debug());
        $this->setTwig($twig);
    }
}