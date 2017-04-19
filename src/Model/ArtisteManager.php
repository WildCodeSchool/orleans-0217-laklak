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

    private $lastid;

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


    public function reArrayFiles($value, &$file_post)
    {

        $this->addArtist($value, $file_post['artistImgProfilPath'], $file_post['artistImgCoverPath']);

        $file_ary = array();
        $file_count = count($file_post['galerie']['name']);
        $file_keys = array_keys($file_post['galerie']);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post['galerie'][$key][$i];
            }
        }

        $uploaddir = 'images/Upload/Galerie/Artist/';

        $this->lastid = $this->bdd->lastInsertId();

        for ($i = 0; $i < $file_count ; $i++){
            if ($file_ary[$i]['name'] != null){
                $uploadfile = $uploaddir . basename($file_ary[$i]['name']);
                move_uploaded_file($file_ary[$i]['tmp_name'], $uploadfile);

                $req = $this->bdd->prepare('INSERT INTO artistimages(artistimggalerypath, idartist) VALUES (:artistimggalerypath, :idartist)');
                $req->bindValue(':idartist', $this->lastid );
                $req->bindValue(':artistimggalerypath', $uploadfile);
                $req->execute();
            }
        }
    }

    /**
     * j'ajoute un artist
     */
    public function addArtist(array $value, $filep, $filec)
    {


        if ($filep['name'] != null){
            $uploaddir = 'images/Upload/Artiste/';
            $uploadfilep = $uploaddir . basename($filep['name']);
            move_uploaded_file($filep['tmp_name'], $uploadfilep);
        } else {
            $uploadfilep = '';
        }

        if ($filec['name'] != null){
            $uploaddir = 'images/Upload/Artiste/';
            $uploadfilec = $uploaddir . basename($filec['name']);
            move_uploaded_file($filec['tmp_name'], $uploadfilec);
        } else {
            $uploadfilec = '';
        }

        if($value['artistidevent'] == ''){
            $value['artistidevent'] = NULL;
        } else {
            $value['artistidevent'] = intval($value['artistidevent']);
        }
        if($value['laklak'] == ''){
            $value['laklak'] = NULL;
        } else {
            $value['laklak'] = intval($value['laklak']);
        }


        $prep = $this->bdd->prepare('INSERT INTO artist (artistname, artistbio, artistlaklak, artistwebsiteurl,
                                                        artistfacebookurl, artisttwitterurl, artisttumblrurl,
                                                        artistvimeourl, artistsoundcloudurl, artistiframesoundcloud, artistiframeyoutube, artistimgcoverpath, 
                                                        artistimgprofilpath, artistidevent, artistiframefacebook, artistinstagramurl) 
                                    VALUES (:artistname, :artistbio, :artistLaklak,:artistWebsiteUrl,:artistFacebookUrl,
                                            :artistTwitterUrl,:artistTumblrUrl,:artistVimeoUrl, :artistSoundcloudUrl,:artistIframeSoundcloudUrl, :artistIframeYoutubeUrl, 
                                            :artistImgCoverPath, :artistImgProfilPath, :artistIdEvent, :artistIframeFacebook, :artistinstagramurl)');


        $prep->bindValue(':artistname', $value['nomArtist']);
        $prep->bindValue(':artistbio', $value['bio']);
        $prep->bindValue(':artistLaklak', $value['laklak']);
        $prep->bindValue(':artistWebsiteUrl', $value['siteArtist']);
        $prep->bindValue(':artistFacebookUrl', $value['fbArtistUrl']);
        $prep->bindValue(':artistTwitterUrl', $value['twitArtist']);
        $prep->bindValue(':artistVimeoUrl', $value['vimArtist']);
        $prep->bindValue(':artistSoundcloudUrl', $value['artistsoundcloudurl']);
        $prep->bindValue(':artistIframeSoundcloudUrl', $value['scArtistIframe']);
        $prep->bindValue(':artistIframeYoutubeUrl', $value['yArtistIframe']);
        $prep->bindValue(':artistTumblrUrl', $value['tumbArtist']);
        $prep->bindValue(':artistImgCoverPath', $uploadfilec);
        $prep->bindValue(':artistImgProfilPath', $uploadfilep);
        $prep->bindValue(':artistIdEvent', $value['artistidevent']);
        $prep->bindValue(':artistIframeFacebook', ($value['fbArtistIframe']));
        $prep->bindValue(':artistinstagramurl', ($value['instArtist']));
        $prep->execute();
    }


    public function reArrayFilesUpdate($file_post, $id)
    {
        $file_ary = array();
        $file_count = count($file_post['galerie']['name']);
        $file_keys = array_keys($file_post['galerie']);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post['galerie'][$key][$i];
            }
        }

        $uploaddir = 'images/Upload/Galerie/Artist/';

        for ($i = 0; $i < $file_count ; $i++){
            if ($file_ary[$i]['name'] != null){
                $uploadfile = $uploaddir . basename($file_ary[$i]['name']);
                move_uploaded_file($file_ary[$i]['tmp_name'], $uploadfile);

                $req = $this->bdd->prepare('INSERT INTO artistimages(artistimggalerypath, idartist) VALUES (:artistimggalerypath, :idartist)');
                $req->bindValue(':idartist', $id);
                $req->bindValue(':artistimggalerypath', $uploadfile);
                $req->execute();
            }
        }
    }


    public function updateArtist($value, $file)
    {

        if ($file['artistImgProfilPath']['name'] != null){
            $uploaddir = 'images/Upload/Artiste/';
            $uploadfilep = $uploaddir . basename($file['artistImgProfilPath']['name']);
            move_uploaded_file($file['artistImgProfilPath']['tmp_name'], $uploadfilep);
        } else {
            $artist = $this->showOneArtist($value['id']);

            $uploadfilep = $artist['artistimgcoverpath'];
        }

        if ($file['artistImgCoverPath']['name'] != null){
            $uploaddir = 'images/Upload/Artiste/';
            $uploadfilec = $uploaddir . basename($file['artistImgCoverPath']['name']);
            move_uploaded_file($file['artistimgcoverpath']['tmp_name'], $uploadfilec);
        } else {
            $artist = $this->showOneArtist($value['id']);
            $uploadfilec = $artist['artistimgprofilpath'];
        }

        if($value['artistidevent'] == ''){
            $value['artistidevent'] = NULL;
        } else {
            $value['artistidevent'] = intval($value['artistidevent']);
        }
        if($value['laklak'] == ''){
            $value['laklak'] = NULL;
        } else {
            $value['laklak'] = intval($value['laklak']);
        }

        if (isset($value['image']) && !empty($value['image'])) {
            $galerie = new GalerieManager();
            $galerie->delete($value['image'], 'artistimages');
        }

        $this->reArrayFilesUpdate($file, $value['id']);

        $req = ("UPDATE artist SET artistname = :artistName, artistbio = :artistBio, 
                                    artistlaklak = :artistLaklak,
                                    artistwebsiteurl = :artistWebsiteUrl, artistfacebookurl = :artistFacebookUrl, 
                                    artisttwitterurl = :artistTwitterUrl,
                                    artisttumblrurl = :artistTumblrURL, artistvimeourl = :artistVimeoUrl, 
                                    artistsoundcloudurl = :artistSoundcloudUrl,
                                    artistiframesoundcloud = :artistIframeSoundcloudUrl, 
                                    artistiframeyoutube = :artistIframeYoutubeUrl, artistimgcoverpath = :artistImgCoverPath, 
                                    artistimgprofilpath = :artistImgProfilPath, artistidevent = :artistIdEvent,
                                    artistiframefacebook = :artistIframeFacebook, artistinstagramurl = :artistInstagramUrl WHERE id = :id");

        $prep = $this->bdd->prepare($req);

        $prep->bindValue(':id', $value['id']);
        $prep->bindValue(':artistName', $value['nomArtist']);
        $prep->bindValue(':artistBio', $value['bio']);
        $prep->bindValue(':artistLaklak', $value['laklak']);
        $prep->bindValue(':artistWebsiteUrl', $value['siteArtist']);
        $prep->bindValue(':artistFacebookUrl', $value['fbArtistUrl']);
        $prep->bindValue(':artistTwitterUrl', $value['twitArtist']);
        $prep->bindValue(':artistTumblrURL', $value['tumbArtist']);
        $prep->bindValue(':artistVimeoUrl', $value['vimArtist']);
        $prep->bindValue(':artistSoundcloudUrl', $value['artistsoundcloudurl']);
        $prep->bindValue(':artistIframeSoundcloudUrl', $value['scArtistIframe']);
        $prep->bindValue(':artistIframeYoutubeUrl', $value['yArtistIframe']);
        $prep->bindValue(':artistImgCoverPath', $uploadfilec);
        $prep->bindValue(':artistImgProfilPath', $uploadfilep);
        $prep->bindValue(':artistIdEvent', $value['artistidevent']);
        $prep->bindValue(':artistIframeFacebook', ($value['fbArtistIframe']));
        $prep->bindValue(':artistInstagramUrl', $value['instArtist']);
        $prep->execute();


    }
    /**
     *
     */
    public function deleteArtist($id)
    {

        $req = $this->bdd->prepare('DELETE FROM artist WHERE id = :id');
        $req->bindValue(':id', $id);
        $req->execute();
    }



}

