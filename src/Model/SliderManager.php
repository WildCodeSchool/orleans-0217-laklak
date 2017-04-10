<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 09/04/17
 * Time: 20:18
 */

namespace laklak\Model;

use laklak\Model\Slider;

class SliderManager extends Manager
{

    public function updateSlide(Slider $slide)
    {
        $req = $this->bdd->prepare('UPDATE slider SET  url = :url,titre = :titre ,boutton = :button WHERE id = :id');
        $req->bindValue(':id', $slide->getId(), \PDO::PARAM_INT);
        $req->bindValue(':url', $slide->getUrl(), \PDO::PARAM_STR);
        $req->bindValue(':titre', $slide->getTitre(), \PDO::PARAM_STR);
        $req->bindValue(':button', $slide->getButton(), \PDO::PARAM_STR);
        $req->execute();
    }

    public function deleteOneSlide($id)
    {
        $req = $this->bdd->prepare('DELETE FROM slider WHERE id = :id');
        $req->bindValue(':id', $id, \PDO::PARAM_INT);
        $req->execute();
    }

    public function addSlide(array $value)
    {
        $req = $this->bdd->prepare('INSERT INTO slider(url,titre,boutton) VALUES  url = :url,titre = :titre ,boutton = :button');
        $req->bindValue(':id', $value['id'], \PDO::PARAM_INT);
        $req->bindValue(':url', $value-['url'], \PDO::PARAM_STR);
        $req->bindValue(':titre', $value['titre'], \PDO::PARAM_STR);
        $req->bindValue(':button', $value['button'], \PDO::PARAM_STR);
        $req->execute();
    }

    public function selectAllSlide()
    {
        $req = $this->bdd->query('SELECT * FROM slider');
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . "\\Slider");

    }

    public function selectOneSlide($id)
    {
        $req = $this->bdd->prepare('SELECT * FROM slider WHERE id = :id');
        $req->bindValue(':id', $id, \PDO::PARAM_INT);
        $req->execute();
        return $req->fetch();

    }
}