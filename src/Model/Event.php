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
    private $event_name;
    private $event_description;
    private $event_location;
    private $event_date;
    private $event_production;
    private $event_website_url;
    private $event_facebook_url;
    private $event_twitter_url;
    private $event_soundcloud_url;
    private $event_iframe_soundcloud;
    private $event_iframe_youtube;
    private $event_laklak;
    private $event_artistes;
    private $event_id_artiste;
    private $event_img_cover_path;
    private $event_img_profile_path;
    private $event_type;
    private $event_more_url;
    private $event_booking_url;

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
        return $this->event_name;
    }

    /**
     * @param mixed $event_name
     */
    public function setEventName($event_name)
    {
        $this->event_name = $event_name;
    }

    /**
     * @return mixed
     */
    public function getEventDescription()
    {
        return $this->event_description;
    }

    /**
     * @param mixed $event_description
     */
    public function setEventDescription($event_description)
    {
        $this->event_description = $event_description;
    }

    /**
     * @return mixed
     */
    public function getEventLocation()
    {
        return $this->event_location;
    }

    /**
     * @param mixed $event_location
     */
    public function setEventLocation($event_location)
    {
        $this->event_location = $event_location;
    }

    /**
     * @return mixed
     */
    public function getEventDate()
    {
        return $this->event_date;
    }

    /**
     * @param mixed $event_date
     */
    public function setEventDate($event_date)
    {
        $this->event_date = $event_date;
    }

    /**
     * @return mixed
     */
    public function getEventProduction()
    {
        return $this->event_production;
    }

    /**
     * @param mixed $event_production
     */
    public function setEventProduction($event_production)
    {
        $this->event_production = $event_production;
    }

    /**
     * @return mixed
     */
    public function getEventWebsiteUrl()
    {
        return $this->event_website_url;
    }

    /**
     * @param mixed $event_website_url
     */
    public function setEventWebsiteUrl($event_website_url)
    {
        $this->event_website_url = $event_website_url;
    }

    /**
     * @return mixed
     */
    public function getEventFacebookUrl()
    {
        return $this->event_facebook_url;
    }

    /**
     * @param mixed $event_facebook_url
     */
    public function setEventFacebookUrl($event_facebook_url)
    {
        $this->event_facebook_url = $event_facebook_url;
    }

    /**
     * @return mixed
     */
    public function getEventTwitterUrl()
    {
        return $this->event_twitter_url;
    }

    /**
     * @param mixed $event_twitter_url
     */
    public function setEventTwitterUrl($event_twitter_url)
    {
        $this->event_twitter_url = $event_twitter_url;
    }

    /**
     * @return mixed
     */
    public function getEventSoundcloudUrl()
    {
        return $this->event_soundcloud_url;
    }

    /**
     * @param mixed $event_soundcloud_url
     */
    public function setEventSoundcloudUrl($event_soundcloud_url)
    {
        $this->event_soundcloud_url = $event_soundcloud_url;
    }

    /**
     * @return mixed
     */
    public function getEventIframeSoundcloud()
    {
        return $this->event_iframe_soundcloud;
    }

    /**
     * @param mixed $event_iframe_soundcloud
     */
    public function setEventIframeSoundcloud($event_iframe_soundcloud)
    {
        $this->event_iframe_soundcloud = $event_iframe_soundcloud;
    }

    /**
     * @return mixed
     */
    public function getEventIframeYoutube()
    {
        return $this->event_iframe_youtube;
    }

    /**
     * @param mixed $event_iframe_youtube
     */
    public function setEventIframeYoutube($event_iframe_youtube)
    {
        $this->event_iframe_youtube = $event_iframe_youtube;
    }

    /**
     * @return mixed
     */
    public function getEventLaklak()
    {
        return $this->event_laklak;
    }

    /**
     * @param mixed $event_laklak
     */
    public function setEventLaklak($event_laklak)
    {
        $this->event_laklak = $event_laklak;
    }

    /**
     * @return mixed
     */
    public function getEventArtistes()
    {
        return $this->event_artistes;
    }

    /**
     * @param mixed $event_artistes
     */
    public function setEventArtistes($event_artistes)
    {
        $this->event_artistes = $event_artistes;
    }

    /**
     * @return mixed
     */
    public function getEventIdArtiste()
    {
        return $this->event_id_artiste;
    }

    /**
     * @param mixed $event_id_artiste
     */
    public function setEventIdArtiste($event_id_artiste)
    {
        $this->event_id_artiste = $event_id_artiste;
    }

    /**
     * @return mixed
     */
    public function getEventImgCoverPath()
    {
        return $this->event_img_cover_path;
    }

    /**
     * @param mixed $event_img_cover_path
     */
    public function setEventImgCoverPath($event_img_cover_path)
    {
        $this->event_img_cover_path = $event_img_cover_path;
    }

    /**
     * @return mixed
     */
    public function getEventImgProfilePath()
    {
        return $this->event_img_profile_path;
    }

    /**
     * @param mixed $event_img_profile_path
     */
    public function setEventImgProfilePath($event_img_profile_path)
    {
        $this->event_img_profile_path = $event_img_profile_path;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * @param mixed $event_type
     */
    public function setEventType($event_type)
    {
        $this->event_type = $event_type;
    }

    /**
     * @return mixed
     */
    public function getEventMoreUrl()
    {
        return $this->event_more_url;
    }

    /**
     * @param mixed $event_more_url
     */
    public function setEventMoreUrl($event_more_url)
    {
        $this->event_more_url = $event_more_url;
    }

    /**
     * @return mixed
     */
    public function getEventBookingUrl()
    {
        return $this->event_booking_url;
    }

    /**
     * @param mixed $event_booking_url
     */
    public function setEventBookingUrl($event_booking_url)
    {
        $this->event_booking_url = $event_booking_url;
    }

    public function listAll()
    {
        // connection à la bdd
        $db = new DB();
        // requete sql pour récupérer tous les events dans un tableau d'objets Events
        $events = $db -> findAll('event');
    }

    public function show($id)
    {
        $db = new DB();
        $event = $db -> findOne('event', $id);
    }

    public function add() {

    }

}