<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 07/04/17
 * Time: 09:51
 */

namespace laklak\Model;


class EventManager
{
    public function listAll($table)
    {
        // connection à la bdd
        $db = new DB();
        // requete sql pour récupérer tous les events dans un tableau d'objets Events
        $req = "SELECT * FROM $table";
        $res = $this->db->query($req);
        return $res->fetchAll(PDO::FETCH_CLASS,'laklak\Model\Event');

    }

    public function show($id)
    {
        $db = new DB();
        $event = $db -> findOne('event', $id);
    }

    public function add() {

    }

}