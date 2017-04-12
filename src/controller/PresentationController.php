<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 12/04/17
 * Time: 18:50
 */

namespace laklak\controller;



use laklak\Model\PresentationManager;

class PresentationController extends Controller
{
    public function adminapropos()
    {
        $presentationmanager = new PresentationManager();
        if (isset($_POST['enregistrer'])) {
            $presentationmanager->updatePresentation($_POST);
        }
        $presentation = $presentationmanager->textPresentation();
        return $this->getTwig()->render('adminapropos.html.twig', array('presentation' => $presentation));
    }
}