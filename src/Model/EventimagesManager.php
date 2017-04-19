<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 19/04/17
 * Time: 16:07
 */

namespace laklak\Model;

use laklak\Model\Eventimages;


class EventimagesManager extends Manager
{

    public function showGaleryEvent($id)
    {
        $req = "SELECT * FROM eventimages WHERE idevent=:id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id' , $id);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, 'laklak\Model\Eventimages');
        return $res[0];
    }

}