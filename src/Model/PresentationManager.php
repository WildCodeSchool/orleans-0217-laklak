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

    public function updatePresentation(array $value)

    {
        $req = $this->bdd->prepare("UPDATE presentation SET textpresentation = :textpresentation WHERE id = :id");
        $req->bindValue(':id', $value['id']);
        $req->bindValue(':textpresentation', $value['textpresentation']);
        $req->execute();

    }

}