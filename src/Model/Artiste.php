<?php

/**
 * Created by PhpStorm.
 * User: francois
 * Date: 06/04/17
 * Time: 18:02
 */

namespace laklak\Model;


class Artiste
{
    private $id;
    private $artist_name;
    private $artist_bio;
    private $artist_laklak;
    private $artist_website_url;
    private $artist_facebook_url;
    private $artist_twitter_url;
    private $artist_tumblr_url;
    private $artist_vimeo_url;
    private $artist_iframe_soundcloud_url;
    private $artist_iframe_youtube_url;
    private $artist_img_cover_path;
    private $artist_img_profil_path;
    private $artist_id_event;

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
    public function getArtistName()
    {
        return $this->artist_name;
    }

    /**
     * @param mixed $artist_name
     */
    public function setArtistName($artist_name)
    {
        $this->artist_name = $artist_name;
    }

    /**
     * @return mixed
     */
    public function getArtistBio()
    {
        return $this->artist_bio;
    }

    /**
     * @param mixed $artist_bio
     */
    public function setArtistBio($artist_bio)
    {
        $this->artist_bio = $artist_bio;
    }

    /**
     * @return mixed
     */
    public function getArtistLaklak()
    {
        return $this->artist_laklak;
    }

    /**
     * @param mixed $artist_laklak
     */
    public function setArtistLaklak($artist_laklak)
    {
        $this->artist_laklak = $artist_laklak;
    }

    /**
     * @return mixed
     */
    public function getArtistWebsiteUrl()
    {
        return $this->artist_website_url;
    }

    /**
     * @param mixed $artist_website_url
     */
    public function setArtistWebsiteUrl($artist_website_url)
    {
        $this->artist_website_url = $artist_website_url;
    }

    /**
     * @return mixed
     */
    public function getArtistFacebookUrl()
    {
        return $this->artist_facebook_url;
    }

    /**
     * @param mixed $artist_facebook_url
     */
    public function setArtistFacebookUrl($artist_facebook_url)
    {
        $this->artist_facebook_url = $artist_facebook_url;
    }

    /**
     * @return mixed
     */
    public function getArtistTwitterUrl()
    {
        return $this->artist_twitter_url;
    }

    /**
     * @param mixed $artist_twitter_url
     */
    public function setArtistTwitterUrl($artist_twitter_url)
    {
        $this->artist_twitter_url = $artist_twitter_url;
    }

    /**
     * @return mixed
     */
    public function getArtistTumblrUrl()
    {
        return $this->artist_tumblr_url;
    }

    /**
     * @param mixed $artist_tumblr_url
     */
    public function setArtistTumblrUrl($artist_tumblr_url)
    {
        $this->artist_tumblr_url = $artist_tumblr_url;
    }

    /**
     * @return mixed
     */
    public function getArtistVimeoUrl()
    {
        return $this->artist_vimeo_url;
    }

    /**
     * @param mixed $artist_vimeo_url
     */
    public function setArtistVimeoUrl($artist_vimeo_url)
    {
        $this->artist_vimeo_url = $artist_vimeo_url;
    }

    /**
     * @return mixed
     */
    public function getArtistIframeSoundcloudUrl()
    {
        return $this->artist_iframe_soundcloud_url;
    }

    /**
     * @param mixed $artist_iframe_soundcloud_url
     */
    public function setArtistIframeSoundcloudUrl($artist_iframe_soundcloud_url)
    {
        $this->artist_iframe_soundcloud_url = $artist_iframe_soundcloud_url;
    }

    /**
     * @return mixed
     */
    public function getArtistIframeYoutubeUrl()
    {
        return $this->artist_iframe_youtube_url;
    }

    /**
     * @param mixed $artist_iframe_youtube_url
     */
    public function setArtistIframeYoutubeUrl($artist_iframe_youtube_url)
    {
        $this->artist_iframe_youtube_url = $artist_iframe_youtube_url;
    }

    /**
     * @return mixed
     */
    public function getArtistImgCoverPath()
    {
        return $this->artist_img_cover_path;
    }

    /**
     * @param mixed $artist_img_cover_path
     */
    public function setArtistImgCoverPath($artist_img_cover_path)
    {
        $this->artist_img_cover_path = $artist_img_cover_path;
    }

    /**
     * @return mixed
     */
    public function getArtistImgProfilPath()
    {
        return $this->artist_img_profil_path;
    }

    /**
     * @param mixed $artist_img_profil_path
     */
    public function setArtistImgProfilPath($artist_img_profil_path)
    {
        $this->artist_img_profil_path = $artist_img_profil_path;
    }

    /**
     * @return mixed
     */
    public function getArtistIdEvent()
    {
        return $this->artist_id_event;
    }

    /**
     * @param mixed $artist_id_event
     */
    public function setArtistIdEvent($artist_id_event)
    {
        $this->artist_id_event = $artist_id_event;
    }



}