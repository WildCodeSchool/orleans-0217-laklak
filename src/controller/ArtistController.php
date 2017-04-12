<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;

use laklak\Model\ArtisteManager;
use laklak\Model\Artist;

class ArtistController extends Controller
{

    public function listArtist()
   {
       $artist =new ArtisteManager();
       $artists = $artist->showAll();

       return $this->getTwig()->render('listeartistes.html.twig', array('artists' => $artists));
   }

    public function addArtist()
    {

        if (isset($_POST ['add'])){

            $artist = new ArtisteManager();
            $artist->addArtist($_POST);
            return $this->getTwig()->render('ajoutartistes.html.twig');

        }

        // si le form est submit, je récupère mon $_POST
        // je fais mon traitement


        // $artist -> setNom($_POST['nom');

        // $artist -> insert();
        // redirect vers la page qui liste les artist $this->listArtist()

        // sinon le form est pas submit, j'affiche le form
        return $this->getTwig()->render('ajoutartistes.html.twig');


    }

    public function updateEvent($id)
    {
        // si le form est submit
        // $artist = findOne($id);
        // comme pour le addArtist
        // $artist->update();
        //  redirect

        // sinon j'affiche le form
        return $this->getTwig()->render('ajoutartistes.html.twig', array('artist'=>$artist));
    }

    public function deleteArtist ($id)
    {
        $artist =new ArtisteManager();
        $artists = $artist->showAll();

        return $this->getTwig()->render('listeartistes.html.twig', array('artists' => $artists));
    }

}