<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 19/04/17
 * Time: 16:05
 */

namespace laklak\Model;


class Eventimages
{
    private $id;
    private $idevent;
    private $eventimggalerrypath;

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
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * @param mixed $idevent
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;
    }

    /**
     * @return mixed
     */
    public function getEventimggalerrypath()
    {
        return $this->eventimggalerrypath;
    }

    /**
     * @param mixed $eventimggalerrypath
     */
    public function setEventimggalerrypath($eventimggalerrypath)
    {
        $this->eventimggalerrypath = $eventimggalerrypath;
    }

}