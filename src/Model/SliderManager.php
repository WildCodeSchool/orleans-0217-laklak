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

    public function updateSlide(array $slide)
    {
        $req = $this->bdd->prepare('UPDATE slider SET  url = :url,title = :title ,baseline = :baseline, button = :button WHERE id = :id');
        $req->bindValue(':id', $slide['id'], \PDO::PARAM_INT);
        $req->bindValue(':url', $slide['image'], \PDO::PARAM_STR);
        $req->bindValue(':title', $slide['title'], \PDO::PARAM_STR);
        $req->bindValue(':button', $slide['button'], \PDO::PARAM_STR);
        $req->bindValue(':baselin', $slide['baseline'], \PDO::PARAM_STR);

        $req->execute();
    }

    public function deleteOneSlide($id)
    {
        $req = $this->bdd->prepare('DELETE FROM slider WHERE id = :id');
        $req->bindValue(':id', $id, \PDO::PARAM_INT);
        $req->execute();
    }

    public function addSlide(array $value,$file)
    {
        $uploaddir = 'images/Upload/Slider/';
        $uploadfile = $uploaddir . basename($file['image']['name']);
        move_uploaded_file($file['image']['tmp_name'], $uploadfile);

        $req = $this->bdd->prepare('INSERT INTO slider(url,title,baseline, button) VALUES  (:url, :title,:baseline, :button)');
        $req->bindValue(':url', $uploadfile, \PDO::PARAM_STR);
        $req->bindValue(':title', $value['title'], \PDO::PARAM_STR);
        $req->bindValue(':baseline', $value['baseline'], \PDO::PARAM_STR);
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