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
        $artist = new ArtisteManager();

        if (isset($_POST ['add'])){


            $artist->addArtist($_POST);
            return $this->getTwig()->render('ajoutartistes.html.twig');

        }
        if (isset($_GET['id'])){
           $value = $artist->showOneArtist($_GET['id']);
            return $this->getTwig()->render('ajoutartistes.html.twig', array('artist' => $value));
        }


        // sinon le form est pas submit, j'affiche le form
        return $this->getTwig()->render('ajoutartistes.html.twig');


    }

    public function updateArtist($id)
    {
        $art = new ArtisteManager();

        if (isset($_POST['add'])) {

            $art->updateArtist($id, $_POST);
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
    public function artist($id)
    {
        $art = new ArtisteManager();
        $artist=$art->showOneArtist($id);
        return $this->getTwig()->render('artistes.html.twig',array('artist'=>$artist));
    }
    public function listeArt()
    {
        $artist = new ArtisteManager();
        $artists=$artist->showAll();
        return $this->getTwig()->render('liste_artistes.html.twig',array('artists'=>$artists));
    }
}