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

    public function listOneArtist($id)
    {
        if (isset($_POST ['modif'])){

            $artist = new ArtisteManager();
            $artist->showOneArtist($id);

            return $this->getTwig()->render('ajoutartstes.html.twig');
        }

    }

    public function addArtist()
    {

        if (isset($_POST ['add'])){

            $artist = new ArtisteManager();
            $artist->addArtist($_POST);
            return $this->getTwig()->render('ajoutartistes.html.twig');

        }


        // sinon le form est pas submit, j'affiche le form
        return $this->getTwig()->render('ajoutartistes.html.twig');


    }

    public function updateArtist($id)
    {
        $art = new ArtisteManager();

        if (isset($_POST['updateArtist'])) {

            $art->updateArtist($id);
            header('Location:?page=listartistes');
        }

        $artist=$art->showOneArtist($id);
        return $this->getTwig()->render('editartistes.html.twig',array('artist'=>$artist));
    }

    public function deleteArtist ()
    {
        if(isset($_POST['delete'])) {
            $artist = new ArtisteManager();
            $artist->deleteArtist($_POST['id']);
        }

        return $this->getTwig()->render('listeartistes.html.twig');

    }

}