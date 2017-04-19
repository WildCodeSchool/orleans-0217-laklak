<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 07/04/17
 * Time: 06:42
 */

namespace laklak\Model;


class Event
{
    private $id;
    private $eventName;
    private $eventDescription;
    private $eventLocation;

    /**
     * @var \DateTime
     * format datetime 'yyyy-mm-dd h:i:s'
     */
    private $eventDate;

    private $eventProduction;
    private $eventWebsiteUrl;
    private $eventFacebookUrl;
    private $eventTwitterUrl;
    private $eventSoundcloudUrl;
    private $eventIframeSoundcloud;
    private $eventIframeYoutube;
    private $eventLaklak;
    private $eventArtistes;
    private $eventIdArtiste;
    private $eventImgCoverPath;
    private $eventImgProfilePath;
    private $eventType;
    private $eventMoreUrl;
    private $eventBookingUrl;

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
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param mixed $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return mixed
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * @param mixed $eventDescription
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;
    }

    /**
     * @return mixed
     */
    public function getEventLocation()
    {
        return $this->eventLocation;
    }

    /**
     * @param mixed $eventLocation
     */
    public function setEventLocation($eventLocation)
    {
        $this->eventLocation = $eventLocation;
    }

    /**
     * @return mixed
     */
    public function getEventDate()
    {
        if ('string' == gettype($this->eventDate)) {
            $this->eventDate = \DateTime::createFromFormat('Y-m-d H:i:s', $this->eventDate);
        }

        return $this->eventDate;
    }

    /**
     * @param mixed $eventDate
     */
    public function setEventDate(\DateTime $eventDate)
    {
        $this->eventDate = $eventDate;
    }


    /**
     * @return mixed
     */
    public function getEventProduction()
    {
        return $this->eventProduction;
    }

    /**
     * @param mixed $eventProduction
     */
    public function setEventProduction($eventProduction)
    {
        $this->eventProduction = $eventProduction;
    }

    /**
     * @return mixed
     */
    public function getEventWebsiteUrl()
    {
        return $this->eventWebsiteUrl;
    }

    /**
     * @param mixed $eventWebsiteUrl
     */
    public function setEventWebsiteUrl($eventWebsiteUrl)
    {
        $this->eventWebsiteUrl = $eventWebsiteUrl;
    }

    /**
     * @return mixed
     */
    public function getEventFacebookUrl()
    {
        return $this->eventFacebookUrl;
    }

    /**
     * @param mixed $eventFacebookUrl
     */
    public function setEventFacebookUrl($eventFacebookUrl)
    {
        $this->eventFacebookUrl = $eventFacebookUrl;
    }

    /**
     * @return mixed
     */
    public function getEventTwitterUrl()
    {
        return $this->eventTwitterUrl;
    }

    /**
     * @param mixed $eventTwitterUrl
     */
    public function setEventTwitterUrl($eventTwitterUrl)
    {
        $this->eventTwitterUrl = $eventTwitterUrl;
    }

    /**
     * @return mixed
     */
    public function getEventSoundcloudUrl()
    {
        return $this->eventSoundcloudUrl;
    }

    /**
     * @param mixed $eventSoundcloudUrl
     */
    public function setEventSoundcloudUrl($eventSoundcloudUrl)
    {
        $this->eventSoundcloudUrl = $eventSoundcloudUrl;
    }

    /**
     * @return mixed
     */
    public function getEventIframeSoundcloud()
    {
        return $this->eventIframeSoundcloud;
    }

    /**
     * @param mixed $eventIframeSoundcloud
     */
    public function setEventIframeSoundcloud($eventIframeSoundcloud)
    {
        $this->eventIframeSoundcloud = $eventIframeSoundcloud;
    }

    /**
     * @return mixed
     */
    public function getEventIframeYoutube()
    {
        return $this->eventIframeYoutube;
    }

    /**
     * @param mixed $eventIframeYoutube
     */
    public function setEventIframeYoutube($eventIframeYoutube)
    {
        $this->eventIframeYoutube = $eventIframeYoutube;
    }

    /**
     * @return mixed
     */
    public function getEventLaklak()
    {
        return $this->eventLaklak;
    }

    /**
     * @param mixed $eventLaklak
     */
    public function setEventLaklak($eventLaklak)
    {
        $this->eventLaklak = $eventLaklak;
    }

    /**
     * @return mixed
     */
    public function getEventArtistes()
    {
        return $this->eventArtistes;
    }

    /**
     * @param mixed $eventArtistes
     */
    public function setEventArtistes($eventArtistes)
    {
        $this->eventArtistes = $eventArtistes;
    }

    /**
     * @return mixed
     */
    public function getEventIdArtiste()
    {
        return $this->eventIdArtiste;
    }

    /**
     * @param mixed $eventIdArtiste
     */
    public function setEventIdArtiste($eventIdArtiste)
    {
        $this->eventIdArtiste = $eventIdArtiste;
    }

    /**
     * @return mixed
     */
    public function getEventImgCoverPath()
    {
        return $this->eventImgCoverPath;
    }

    /**
     * @param mixed $eventImgCoverPath
     */
    public function setEventImgCoverPath($eventImgCoverPath)
    {
        $this->eventImgCoverPath = $eventImgCoverPath;
    }

    /**
     * @return mixed
     */
    public function getEventImgProfilePath()
    {
        return $this->eventImgProfilePath;
    }

    /**
     * @param mixed $eventImgProfilePath
     */
    public function setEventImgProfilePath($eventImgProfilePath)
    {
        $this->eventImgProfilePath = $eventImgProfilePath;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param mixed $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return mixed
     */
    public function getEventMoreUrl()
    {
        return $this->eventMoreUrl;
    }

    /**
     * @param mixed $eventMoreUrl
     */
    public function setEventMoreUrl($eventMoreUrl)
    {
        $this->eventMoreUrl = $eventMoreUrl;
    }

    /**
     * @return mixed
     */
    public function getEventBookingUrl()
    {
        return $this->eventBookingUrl;
    }

    /**
     * @param mixed $eventBookingUrl
     */
    public function setEventBookingUrl($eventBookingUrl)
    {
        $this->eventBookingUrl = $eventBookingUrl;
    }



}