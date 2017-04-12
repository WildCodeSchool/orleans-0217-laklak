<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 06/04/17
 * Time: 18:13
 */

namespace laklak\Model;
use laklak\Model\Artist;


class ArtisteManager extends Manager
{
    public function showAll()
    {
        // connection à la bdd
        $req = $this->bdd->query('SELECT * FROM artist');
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\Artist");
    }


    /**
     * récupération de l'artiste correspondant à l'id $id et affichage des informations de cet artiste uniquement
     * @param $id
     * @return string
     */
    public function showOne($id)
    {
        $req = "SELECT * FROM artist WHERE id=$id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\model\\'.ucfirst('artist'));
        return $res[$id];

    }

    /**
     * j'ajoute un élève
     */
    public function addArtist(array $value)
    {


        $prep= $this->bdd->prepare('INSERT INTO artist (id, artistname, artistbio, artistlaklak, artistwebsiteurl,
                                                        artistfacebookurl, artisttwitterurl, artisttumblrurl,
                                                        artistvimeourl, artistsoundcloudurl, artistinstaurl, 
                                                        artistiframesoundcloud, artistiframeyoutube, artistimgcoverpath, 
                                                        artistimgprofilpath, artistidevent) 
                                    VALUES (:artistId, :artistName, :artistBio, :artistLaklak,:artistWebsiteUrl,:artistFacebookUrl,
                                            :artistTwitterUrl,:artistTumblrUrl,:artistVimeoUrl, :artistSoundcloudUrl,
                                            :artistInstaUrl,:artistIframeSoundcloudUrl, :artistIframeYoutubeUrl, 
                                            :artistImgCoverPath, :artistImgProfilPath, :artistIdEvent)');

       $prep->bindValue (':artistId', $value['artistid']);
       $prep->bindValue (':artistName', $value['nomArtist']);
       $prep->bindValue (':artistBio', $value['bio']);
       $prep->bindValue  (':artistLaklak',intval($value['laklak']));
       $prep->bindValue  (':artistWebsiteUrl', $value['siteArtist']);
       $prep->bindValue  (':artistFacebookUrl', $value['fbArtistIframe']);
       $prep->bindValue  (':artistTwitterUrl', $value['twitArtist']);
       $prep->bindValue  (':artistVimeoUrl', $value['vimArtist']);
       $prep->bindValue  (':artistSoundcloudUrl', $value['artistsoundcloudurl']);
       $prep->bindValue  (':artistIframeSoundcloudUrl', $value['scArtistIframe']);
       $prep->bindValue  (':artistIframeYoutubeUrl', $value['yArtistIframe']);
       $prep->bindValue  (':artistInstaUrl', $value['instArtist']);
       $prep->bindValue  (':artistTumblrUrl', $value['tumbArtist']);
       $prep->bindValue  (':artistImgCoverPath', $value['artistImgCoverPath']);
       $prep->bindValue (':artistImgProfilPath', $value['artistImgProfilPath']);
       $prep->bindValue (':artistIdEvent', intval($value['artistidevent']));

       var_dump($prep);
       $prep->execute();
        var_dump($prep);
    }

    /**
     *
     */
    public function update() {
        $res=$this-> bdd->prepare("UPDATE artist SET  WHERE id =:id");
        $res->bindValue(':nom', $_POST['nom']);
        $res->bindValue(':prenom', $_POST['premon']);
        $res->bindValue(':age', $_POST['age']);
        $res->bindValue(':id', $_POST['id']);
        $res->execute();
    }

    /**
     *
     */
    public function deleteArtist($id) {


        $req = $this->bdd->prepare('DELETE FROM artist WHERE id = :id');
        $req->bindValue(':id', $id, \PDO::PARAM_INT);
        $req->execute();
    }



}

