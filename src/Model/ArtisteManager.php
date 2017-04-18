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
    public function showOneArtist($id)
    {

        // requete sql pour récupérer un event dans un tableau d'objets artists
        $req = "SELECT * FROM artist WHERE id = :id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id', $id);

        $prep->execute();

        $res = $prep->fetch();
        return $res;
    }

    /**
     * j'ajoute un artist
     */
    public function addArtist(array $value)
    {


        $prep= $this->bdd->prepare('INSERT INTO artist (artistname, artistbio, artistlaklak, artistwebsiteurl,
                                                        artistfacebookurl, artisttwitterurl, artisttumblrurl,
                                                        artistvimeourl, artistsoundcloudurl, artistinstaurl, 
                                                        artistiframesoundcloud, artistiframeyoutube, artistimgcoverpath, 
                                                        artistimgprofilpath, artistidevent) 
                                    VALUES (:artistname, :artistbio, :artistLaklak,:artistWebsiteUrl,:artistFacebookUrl,
                                            :artistTwitterUrl,:artistTumblrUrl,:artistVimeoUrl, :artistSoundcloudUrl,
                                            :artistInstaUrl,:artistIframeSoundcloudUrl, :artistIframeYoutubeUrl, 
                                            :artistImgCoverPath, :artistImgProfilPath, :artistIdEvent)');


       $prep->bindValue (':artistname', $value['nomArtist']);
       $prep->bindValue (':artistbio', $value['bio']);
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

       $prep->execute();

    }

    /**
     *
     */
    public function updateArtist($id, $value)
    {


        $req=("UPDATE artist SET artistname = :artistName, artistbio = :artistBio, 
                                    artistlaklak = :artistLaklak,
                                    artistwebsiteurl = :artistWebsitUrl, artistfacebookurl = :artistFacebookUrl, 
                                    artisttwitterurl = :artistTwitterUrl
                                    artisttumblrurl = :artistTumblrURL, artistvimeourl = :artistVimeoUrl, 
                                    artistsoundcloudurl = :artistSouncloudUrl,
                                    artistinstaurl = :artistInstaUrl, artistiframesoundcloud = :artistIframeSoundcloudUrl, 
                                    artistiframeyoutube = :artistIframeYoutube, artistimgcoverpath = :artistImgcoverPath, 
                                    artistimgprofilpath = :artistImgProfilPath, artistidevent = :artistIdEvent WHERE id =:id");

        $prep = $this->bdd->prepare($req);

        $prep->bindValue(':id', $id);
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
        $prep->execute();

    }

    /**
     *
     */
    public function deleteArtist($id) {


        $req = $this->bdd->prepare('DELETE FROM artist WHERE id = :id');
        $req->bindValue(':id', $id );
        $req->execute();
    }



}

