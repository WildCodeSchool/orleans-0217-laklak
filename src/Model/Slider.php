<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 09/04/17
 * Time: 20:31
 */

namespace laklak\Model;


class Slider
{

    private $id;

    private $url;

    private $titre;

    private $button;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getButton()
    {
        return $this->button;
    }

    /**
     * @param mixed $button
     */
    public function setButton($button)
    {
        $this->button = $button;
    }



}