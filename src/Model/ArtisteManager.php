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
        // requete sql pour récupérer tous les artistes dans un tableau d'objets Artistes
        $artistes = $db -> findAll('artistes');
        // affichage de la vue HTML
        return $this->render('/front/liste_artistes.html.twig', ['artistes'=>$artistes]);
    }

    /**
     * récupération de l'artiste correspondant à l'id $id et affichage des informations de cet artiste uniquement
     * @param $id
     * @return string
     */
    public function showOne($id)
    {
        $db = new DB();
        $artiste = $db -> findOne('artiste', $id);
        return $this->render('front/artiste.html.twig', ['artiste'=>$artiste]);

    }

    /**
     * j'ajoute un élève
     */
    public function add()
    {
        $db = new DB();
        $artistes = $db ->add('artistes');
        return $this->render('front/liste_artistes.html.twig');
    }

    /**
     *
     */
    public function update() {

    }

    /**
     *
     */
    public function delete() {

    }



}

