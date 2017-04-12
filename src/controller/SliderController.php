<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 12/04/17
 * Time: 18:39
 */

namespace laklak\controller;

use laklak\Model\SliderManager;


class SliderController extends Controller
{
    public function modifAccueil()
    {
        $slide = new SliderManager();
        $slides = $slide->selectAllSlide();
        if (isset($_POST['addSlider'])) {
            $slide->addSlide($_POST,$_FILES);
            header('location: ?page=modifAccueil');
        } elseif (isset($_POST['deleteSlider'])) {
            $slide->deleteOneSlide($_POST['id']);
            header('location: ?page=modifAccueil');
        } elseif (isset($_POST['updateSlider'])) {
            $slide->updateSlide($_POST);
            header('location: ?page=modifAccueil');
        }
        return $this->getTwig()->render('modifAccueil.html.twig', array('slides' => $slides));

    }
}