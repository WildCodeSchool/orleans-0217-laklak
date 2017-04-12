<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 11/04/17
 * Time: 17:55
 */

namespace laklak\Model;


use laklak\controller\Controller;

class PresentationManager extends Manager
{
    public function textPresentation()
    {

        $req = $this->bdd->query("SELECT * FROM presentation WHERE id=1");
        $req->execute();
        $presentation = $req->fetchObject(Presentation::class);

        return $presentation;

    }

    public function inserttextPresentation()

    {
        $req = $this->bdd->query("INSERT INTO presentation VALUES ('text_presentation')");
        $req->execute();
        $presentation = $req->fetchObject(Presentation::class);

        return $presentation;
        
    }
}