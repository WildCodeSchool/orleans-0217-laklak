<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 19/04/17
 * Time: 11:38
 */

namespace laklak\Model;

use laklak\Model\Disco;

class DiscoManager extends Manager
{

    /*un test  */

    public function showDisc($idartist)
    {
        $req = "SELECT * FROM artistdiscographie WHERE idartist = :id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id', $idartist);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, 'laklak\Model\Disco');
        return $res;


    }
}
