<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/04/17
 * Time: 13:09
 */

namespace laklak\Model;


class GalerieManager extends Manager
{
    /**
     * Selectionne toutes les images apartenant à un artiste
     */
    public function showAll($id, $table, $col)
    {
        $req = $this->bdd->prepare("SELECT * FROM $table WHERE $col = :id");
        $req->bindValue(':id', $id);
        $req->execute();

        $result = $req->fetchAll();
        return $result;
    }

    public function delete(array $id, $table)
    {
        $count = count($id);
        foreach ($id as $idimage) {

            $req = $this->bdd->prepare("DELETE FROM $table WHERE id = :id");
            $req->bindValue(':id', $idimage);
            $req->execute();
        }
    }

}