<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 05/04/17
 * Time: 12:09
 */

namespace laklak\controller;


use laklak\Model\Artiste;

class ArtistController extends Controller
{

    public function listArtist()
    {
        $artists = new Artiste();
        $artists = $this->findAll('artiste');
        return $this->twig->render('listartistes.html.twig');
    }

    public function addArtist()
    {
        $artist_name = $artist_bio =$artist_laklak=$artist_website_url=$artist_facebook_url=$artist_twitter_url=$artist_tumblr_url=$artist_vimeo_url=$artist_iframe_soundcloud_url=$artist_soundcloud_url=$artist_iframe_youtube_url=$artist_img_cover_path=$artist_img_profil_path=$artist_id_event=$artist_insta_url='';
        // si le form est submit, je récupère mon $_POST
        if (isset($_POST['submit']));
        $artist_name = $_POST['nomArtist'];
        $artist_bio = $_POST['bio'];
        $artist_laklak = $_POST['laklak'];
        $artist_website_url = $_POST['siteArtist'];
        $artist_facebook_url = $_POST['fbArtistIframe'];
        $artist_twitter_url = $_POST['twitArtist'];
        $artist_vimeo_url = $_POST['vimArtist'];
        $artist_soundcloud_url = $_POST['artist_soundcloud_url'];
        $artist_iframe_soundcloud_url = $_POST['scArtistIframe'];
        $artist_iframe_youtube_url = $_POST['yArtistIframe'];
        $artist_insta_url = $_POST['instArtist'];
        $artist_tumblr_url = $_POST['tumbArtist'];
        $artist_img_cover_path = $_POST['artist_img_cover_path'];
        $artist_img_profil_path = $_POST['artist_img_profil_path'];
        $artist_id_event = $_POST['artist_id_event'];

        $bdd->exec("INSERT INTO artiste VALUES ('$artist_name', '$artist_bio', '$artist_laklak','$artist_website_url,' ||
         '$artist_facebook_url','$artist_twitter_url','$artist_tumblr_url','$artist_vimeo_url','$artist_soundcloud_url','$artist_insta_url','$artist_iframe_soundcloud_url','$artist_iframe_youtube_url',
         '$artist_img_cover_path','$artist_img_profil_path','$artist_id_event')");

        header('location:index.html.twig');
        // je fais mon traitement
        // $artist = new Artist()
        // $artist -> setNom($_POST['nom');

        // $artist -> insert();
        // redirect vers la page qui liste les artist $this->listArtist()

        // sinon le form est pas submit, j'affiche le form
        return $this->twig->render('ajoutartistes.html.twig');
    }

    public function updateEvent($id)
    {
        // si le form est submit
        // $artist = findOne($id);
        // comme pour le addArtist
        // $artist->update();
        //  redirect

        // sinon j'affiche le form
        return $this->twig->render('ajoutartistes.html.twig', array('artist'=>$artist));
    }

}