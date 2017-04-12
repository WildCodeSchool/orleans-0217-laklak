<?php

/**
 * Created by PhpStorm.
 * User: francois
 * Date: 06/04/17
 * Time: 18:02
 */

namespace laklak\Model;


class Artist
{
    private $id;
    private $artistName;
    private $artistBio;
    private $artistLaklak;
    private $artistWebsiteUrl;
    private $artistFacebookUrl;
    private $artistTwitterUrl;
    private $artistTumblrUrl;
    private $artistVimeoUrl;
    private $artisteInstaUrl;
    private $artistIframeSoundcloudUrl;
    private $artistSoundcloudUrl;
    private $artistIframeYoutubeUrl;
    private $artistImgCoverPath;

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
        return $this->artistName;
    }

    /**
     * @param mixed $artistName
     */
    public function setArtistName($artistName)
    {
        $this->artistName = $artistName;
    }

    /**
     * @return mixed
     */
    public function getArtistBio()
    {
        return $this->artistBio;
    }

    /**
     * @param mixed $artistBio
     */
    public function setArtistBio($artistBio)
    {
        $this->artistBio = $artistBio;
    }

    /**
     * @return mixed
     */
    public function getArtistLaklak()
    {
        return $this->artistLaklak;
    }

    /**
     * @param mixed $artistLaklak
     */
    public function setArtistLaklak($artistLaklak)
    {
        $this->artistLaklak = $artistLaklak;
    }

    /**
     * @return mixed
     */
    public function getArtistWebsiteUrl()
    {
        return $this->artistWebsiteUrl;
    }

    /**
     * @param mixed $artistWebsiteUrl
     */
    public function setArtistWebsiteUrl($artistWebsiteUrl)
    {
        $this->artistWebsiteUrl = $artistWebsiteUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistFacebookUrl()
    {
        return $this->artistFacebookUrl;
    }

    /**
     * @param mixed $artistFacebookUrl
     */
    public function setArtistFacebookUrl($artistFacebookUrl)
    {
        $this->artistFacebookUrl = $artistFacebookUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistTwitterUrl()
    {
        return $this->artistTwitterUrl;
    }

    /**
     * @param mixed $artistTwitterUrl
     */
    public function setArtistTwitterUrl($artistTwitterUrl)
    {
        $this->artistTwitterUrl = $artistTwitterUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistTumblrUrl()
    {
        return $this->artistTumblrUrl;
    }

    /**
     * @param mixed $artistTumblrUrl
     */
    public function setArtistTumblrUrl($artistTumblrUrl)
    {
        $this->artistTumblrUrl = $artistTumblrUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistVimeoUrl()
    {
        return $this->artistVimeoUrl;
    }

    /**
     * @param mixed $artistVimeoUrl
     */
    public function setArtistVimeoUrl($artistVimeoUrl)
    {
        $this->artistVimeoUrl = $artistVimeoUrl;
    }

    /**
     * @return mixed
     */
    public function getArtisteInstaUrl()
    {
        return $this->artisteInstaUrl;
    }

    /**
     * @param mixed $artisteInstaUrl
     */
    public function setArtisteInstaUrl($artisteInstaUrl)
    {
        $this->artisteInstaUrl = $artisteInstaUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistIframeSoundcloudUrl()
    {
        return $this->artistIframeSoundcloudUrl;
    }

    /**
     * @param mixed $artistIframeSoundcloudUrl
     */
    public function setArtistIframeSoundcloudUrl($artistIframeSoundcloudUrl)
    {
        $this->artistIframeSoundcloudUrl = $artistIframeSoundcloudUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistSoundcloudUrl()
    {
        return $this->artistSoundcloudUrl;
    }

    /**
     * @param mixed $artistSoundcloudUrl
     */
    public function setArtistSoundcloudUrl($artistSoundcloudUrl)
    {
        $this->artistSoundcloudUrl = $artistSoundcloudUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistIframeYoutubeUrl()
    {
        return $this->artistIframeYoutubeUrl;
    }

    /**
     * @param mixed $artistIframeYoutubeUrl
     */
    public function setArtistIframeYoutubeUrl($artistIframeYoutubeUrl)
    {
        $this->artistIframeYoutubeUrl = $artistIframeYoutubeUrl;
    }

    /**
     * @return mixed
     */
    public function getArtistImgCoverPath()
    {
        return $this->artistImgCoverPath;
    }

    /**
     * @param mixed $artistImgCoverPath
     */
    public function setArtistImgCoverPath($artistImgCoverPath)
    {
        $this->artistImgCoverPath = $artistImgCoverPath;
    }

    /**
     * @return mixed
     */
    public function getArtistImgProfilPath()
    {
        return $this->artistImgProfilPath;
    }

    /**
     * @param mixed $artistImgProfilPath
     */
    public function setArtistImgProfilPath($artistImgProfilPath)
    {
        $this->artistImgProfilPath = $artistImgProfilPath;
    }

    /**
     * @return mixed
     */
    public function getArtistIdEvent()
    {
        return $this->artistIdEvent;
    }

    /**
     * @param mixed $artistIdEvent
     */
    public function setArtistIdEvent($artistIdEvent)
    {
        $this->artistIdEvent = $artistIdEvent;
    }
    private $artistImgProfilPath;
    private $artistIdEvent;


}