<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 11/04/17
 * Time: 17:53
 */

namespace laklak\Model;


class Presentation
{
  private  $id;
  private  $textPresentation;

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
    public function getTextPresentation()
    {
        return $this->textPresentation;
    }

    /**
     * @param mixed $text_presentation
     */
    public function setTextPresentation($text_presentation)
    {
        $this->textPresentation = $text_presentation;
    }

}