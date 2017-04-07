<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 06/04/17
 * Time: 18:13
 */

namespace laklak\Model;


class ArtisteManager extends Artiste
{
    public function showAll()
    {
        // connection à la bdd
        $db = new DB();
        $req = "SELECT * FROM $table";
        $res = $this->db->query($req);
        return $res->fetchAll(PDO::FETCH_CLASS,'laklak\Model\Artiste');
    }


    /**
     * récupération de l'artiste correspondant à l'id $id et affichage des informations de cet artiste uniquement
     * @param $id
     * @return string
     */
    public function showOne($id)
    {
        $req = "SELECT * FROM $table WHERE id=$id";
        $prep = $this->db->prepare($req);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\model\\'.ucfirst($table));
        return $res[$id];

    }

    /**
     * j'ajoute un élève
     */
    public function add()
    {

        $bdd->exec("INSERT INTO artiste (nom, prenom, age) VALUES ('$artist_name', '$artist_bio', '$artist_laklak','$artist_website_url',
         '$artist_facebook_url','$artist_twitter_url','$artist_tumblr_url','$artist_vimeo_url','$artist_soundcloud_url','$artist_insta_url','$artist_iframe_soundcloud_url','$artist_iframe_youtube_url',
         '$artist_img_cover_path','$artist_img_profil_path','$artist_id_event')");


    }

    /**
     *
     */
    public function update() {
        $res=$bdd->prepare("UPDATE artist SET  WHERE id =:id");
        $res->bindValue(':nom', $_POST['nom']);
        $res->bindValue(':prenom', $_POST['premon']);
        $res->bindValue(':age', $_POST['age']);
        $res->bindValue(':id', $_POST['id']);
        $res->execute();
    }

    /**
     *
     */
    public function delete() {

    }



}

