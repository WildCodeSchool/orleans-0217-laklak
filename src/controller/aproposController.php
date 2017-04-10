<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 07/04/17
 * Time: 16:58
 */

namespace laklak\controller;


class aproposController extends Controller
{
    public function textPresentation()
    {
    $req = $this->bdd->query("SELECT * FROM presentation");
    $req->execute();
    $resultat = $req->fetch();

    return $resultat;

    }


}



