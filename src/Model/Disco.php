<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 19/04/17
 * Time: 11:36
 */

namespace laklak\Model;


class Disco
{
    private $id;
    private $idartist;
    private $artistalbumimg;
    private $artistalbumurl;

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
    public function getIdartist()
    {
        return $this->idartist;
    }

    /**
     * @param mixed $idartist
     */
    public function setIdartist($idartist)
    {
        $this->idartist = $idartist;
    }

    /**
     * @return mixed
     */
    public function getArtistalbumimg()
    {
        return $this->artistalbumimg;
    }

    /**
     * @param mixed $artistalbumimg
     */
    public function setArtistalbumimg($artistalbumimg)
    {
        $this->artistalbumimg = $artistalbumimg;
    }

    /**
     * @return mixed
     */
    public function getArtistalbumurl()
    {
        return $this->artistalbumurl;
    }

    /**
     * @param mixed $artistalbumurl
     */
    public function setArtistalbumurl($artistalbumurl)
    {
        $this->artistalbumurl = $artistalbumurl;
    }

}