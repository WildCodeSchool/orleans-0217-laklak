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

use laklak\Model\DiscoManager;

use laklak\Model\EventManager;
use laklak\Model\GalerieManager;


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


        if (isset($_POST['add'])) {
            $art = new ArtisteManager();
            $art->reArrayFiles($_POST, $_FILES);
            header('Location:?page=listeartistes');
        } else {
            return $this->getTwig()->render('ajoutartistes.html.twig');
        }

    }

    public function updateArtist()
    {
        $artist = new ArtisteManager();

        if (isset($_POST['update'])){
            $artist->updateArtist($_POST, $_FILES);

            header('Location:?page=listeartistes');
        } elseif (isset($_GET['id'])) {
            $galerie = new GalerieManager();
            $gal = $galerie->showAll($_GET['id'], 'artistimages', 'idartist' );
            $art = $artist->showOneArtist($_GET['id']);

            return $this->getTwig()->render('ajoutartistes.html.twig', array(
                'artist' => $art,
                'galerie' => $gal
            ));
        }
        header('Location:?page=listeartistes');
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

        $galery = new GalerieManager();
        $galerie = $galery->showAll($id,'artistimages','idartist');

        $disc = new DiscoManager();
        $discs = $disc->showDisc($id);

        $evt = new EventManager();
        $event = $evt->listEventByArtist($id);

        return $this->getTwig()->render('artistes.html.twig',array('artist'=>$artist,'galerie'=>$galerie, 'discs'=>$discs, 'event'=>$event));
    }

    public function listeArt()
    {
        $artist = new ArtisteManager();
        $artists = $artist->showAll();
        return $this->getTwig()->render('liste_artistes.html.twig',array('artists'=>$artists));
    }


}