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

    public function updatePresentation(array $value, $file)

    {
        if ($file['textcover']['name'] != null){
            $uploaddir = 'images/Upload/presentation/';
            $uploadfilec = $uploaddir . basename($file['textcover']['name']);
            move_uploaded_file($file['textcover']['tmp_name'], $uploadfilec);
        }
        else{
            $presentation = $this->textPresentation();
            $uploadfilec = $presentation->textcover;
        }


        $req = $this->bdd->prepare("UPDATE presentation SET textpresentation = :textpresentation, textcover = :textcover WHERE id = :id");
        $req->bindValue(':id', $value['id']);
        $req->bindValue(':textpresentation', $value['textpresentation']);
        $req->bindValue(':textcover', $uploadfilec);
        $req->execute();


    }


}


