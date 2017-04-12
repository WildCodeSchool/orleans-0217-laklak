<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 07/04/17
 * Time: 09:51
 */

namespace laklak\Model;

use laklak\Model\Event;


class EventManager extends Manager
{
    public function listAll()
    {
        // requete sql pour récupérer tous les events dans un tableau d'objets Events
        $req = "SELECT * FROM event";
        $res = $this->bdd->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS,'laklak\Model\Event');
    }

    public function addEvent(array $value)
        {

        // requête sql pour créer l'event
        $req = "INSERT INTO event (eventName,eventDescription,eventLocation,eventDate,eventProduction,eventWebsiteUrl,
        eventFacebookUrl,eventTwitterUrl,eventSoundcloudUrl,eventIframeYoutube,eventIframeSoundcloud,
        eventArtistes,eventLaklak,eventIdArtiste,eventImgCoverPath,eventImgProfilePath,eventType,
        eventMoreUrl,eventBookingUrl) 
                VALUES (:eventName,:eventDescription,:eventLocation,:eventDate,:eventProduction,:eventWebsiteUrl,
        :eventFacebookUrl,:eventTwitterUrl,:eventSoundcloudUrl,:eventIframeYoutube,:eventIframeSoundcloud,
        :eventArtistes,:eventLaklak,:eventIdArtiste,:eventImgCoverPath,:eventImgProfilePath,:eventType,
        :eventMoreUrl,:eventBookingUrl)";

        $prep = $this->bdd->prepare($req);

        $prep->bindValue(':eventName',$value['nom']);
        $prep->bindValue(':eventDescription',$value['description']);
        $prep->bindValue(':eventLocation',$value['lieu']);
        $prep->bindValue(':eventDate',$value['date']);
        $prep->bindValue(':eventProduction',$value['production']);
        $prep->bindValue(':eventWebsiteUrl',$value['websiteUrl']);
        $prep->bindValue(':eventFacebookUrl',$value['facebookUrl']);
        $prep->bindValue(':eventTwitterUrl',$value['twitterUrl']);
        $prep->bindValue(':eventSoundcloudUrl',$value['soundcloudUrl']);
        $prep->bindValue(':eventIframeSoundcloud',$value['iframeSoundcloud']);
        $prep->bindValue(':eventIframeYoutube',$value['iframeYoutube']);
        $prep->bindValue(':eventLaklak',intval($value['laklak']));
        $prep->bindValue(':eventArtistes',$value['artistes']);
        $prep->bindValue(':eventIdArtiste',intval($value['idArtiste']));
        $prep->bindValue(':eventImgCoverPath',$value['imgCoverEvenement']);
        $prep->bindValue(':eventImgProfilePath',$value['imgEvenement']);
        $prep->bindValue(':eventType',$value['type']);
        $prep->bindValue(':eventMoreUrl',$value['moreUrl']);
        $prep->bindValue(':eventBookingUrl',$value['bookingUrl']);

        $prep->execute();

    }


    public function showOneEvent($id)
    {
        // requete sql pour récupérer un event dans un tableau d'objets Events
        $req = "SELECT * FROM event WHERE id=:id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id',$id);

        $prep->execute();

        $res = $prep ->fetchAll(\PDO::FETCH_CLASS,'laklak\Model\Event');
        return $res[0];

    }

    public function updateEvent($id,$value)
    {

        $req = "UPDATE event SET eventName=:eventName, eventDescription=:eventDescription, eventLocation=:eventLocation,
        eventDate=:eventDate, eventProduction=:eventProduction, eventWebsiteUrl=:eventWebsiteUrl, eventFacebookUrl=:eventFacebookUrl
        , eventTwitterUrl=:eventTwitterUrl, eventSoundcloudUrl=:eventSoundcloudUrl, eventIframeYoutube=:eventIframeYoutube,
         eventIframeSoundcloud=:eventIframeSoundcloud, eventArtistes=:eventArtistes, eventLaklak=:eventLaklak,
         eventIdArtiste=:eventIdArtiste, eventImgCoverPath=:eventImgCoverPath, eventImgProfilePath=:eventImgProfilePath,
        eventType=:eventType, eventMoreUrl=:eventMoreUrl, eventBookingUrl=:eventBookingUrl WHERE id=:id";


        $prep = $this->bdd->prepare($req);

        $prep->bindValue(':id',$value['id']);
        $prep->bindValue(':eventName',$value['nom']);
        $prep->bindValue(':eventDescription',$value['description']);
        $prep->bindValue(':eventLocation',$value['lieu']);
        $prep->bindValue(':eventDate',$value['date']);
        $prep->bindValue(':eventProduction',$value['production']);
        $prep->bindValue(':eventWebsiteUrl',$value['websiteUrl']);
        $prep->bindValue(':eventFacebookUrl',$value['facebookUrl']);
        $prep->bindValue(':eventTwitterUrl',$value['twitterUrl']);
        $prep->bindValue(':eventSoundcloudUrl',$value['soundcloudUrl']);
        $prep->bindValue(':eventIframeSoundcloud',$value['iframeSoundcloud']);
        $prep->bindValue(':eventIframeYoutube',$value['iframeYoutube']);
        $prep->bindValue(':eventLaklak',intval($value['laklak']));
        $prep->bindValue(':eventArtistes',$value['artistes']);
        $prep->bindValue(':eventIdArtiste',intval($value['idArtiste']));
        $prep->bindValue(':eventImgCoverPath',$value['imgCoverEvenement']);
        $prep->bindValue(':eventImgProfilePath',$value['imgEvenement']);
        $prep->bindValue(':eventType',$value['type']);
        $prep->bindValue(':eventMoreUrl',$value['moreUrl']);
        $prep->bindValue(':eventBookingUrl',$value['bookingUrl']);

        $prep->execute();

    }

    public function deleteEvent($id)
    {
        // requete sql pour récupérer un event dans un tableau d'objets Events
        $req = "DELETE FROM event WHERE id=:id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id',$id);

        $prep->execute();

    }








}