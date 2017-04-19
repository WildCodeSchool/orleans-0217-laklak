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

    public function listAllByOrderDesc()
    {
        // requete sql pour récupérer tous les events dans un tableau d'objets Events
        $req = "SELECT * FROM event ORDER BY eventDate DESC ";
        $res = $this->bdd->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS,'laklak\Model\Event');
    }

    public function formatEventsByYear() : array
    {
        $events = $this->listAllByOrderDesc();
        foreach($events as $event) {
            $date = $event->getEventDate();
            //je crée un tableau avec une dimension supplémentaire
            $eventsYear[$date->format('Y')][] = $event;
        }
        return $eventsYear;
    }

    public function reArrayFiles($value, &$file_post)
    {
        $this->addEvent($value, $file_post['imgEvenement'], $file_post['imgCoverEvenement']);
        $file_ary = array();
        $file_count = count($file_post['galerie']['name']);
        $file_keys = array_keys($file_post['galerie']);
        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post['galerie'][$key][$i];
            }
        }
        $uploaddir = 'images/Upload/Gallerie/Event/';
        $lastid = $this->bdd->lastInsertId();
        for ($i = 0; $i < $file_count ; $i++){
            if ($file_ary[$i]['name'] != null){
                $uploadfile = $uploaddir . basename($file_ary[$i]['name']);
                move_uploaded_file($file_ary[$i]['tmp_name'], $uploadfile);
                $req = $this->bdd->prepare('INSERT INTO eventimages(idevent, eventimggalerrypath) VALUES (:idevent, :eventimggalerrypath)');
                $req->bindValue(':idevent', $lastid );
                $req->bindValue(':eventimggalerrypath', $uploadfile);
                $req->execute();
            }
        }
    }

    public function addEvent(array $value, $filep, $filec)
    {
        if ($filep['name'] != null){
            $uploaddir = 'images/Upload/Event/';
            $uploadfilep = $uploaddir . basename($filep['name']);
            move_uploaded_file($filep['tmp_name'], $uploadfilep);
        }
        if ($filec['name'] != null){
            $uploaddir = 'images/Upload/Event/';
            $uploadfilec = $uploaddir . basename($filec['name']);
            move_uploaded_file($filec['tmp_name'], $uploadfilec);
        }
        if($value['idArtiste'] == ''){
            $value['idArtiste'] = NULL;
        } else {
            $value['idArtiste'] = intval($value['idArtiste']);
        }
        if($value['laklak'] == ''){
            $value['laklak'] = NULL;
        } else {
            $value['laklak'] = intval($value['laklak']);
        }
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
        $prep->bindValue(':eventName', $value['nom']);
        $prep->bindValue(':eventDescription', $value['description']);
        $prep->bindValue(':eventLocation', $value['lieu']);
        $prep->bindValue(':eventDate', $value['date']);
        $prep->bindValue(':eventProduction', $value['production']);
        $prep->bindValue(':eventWebsiteUrl', $value['websiteUrl']);
        $prep->bindValue(':eventFacebookUrl', $value['facebookUrl']);
        $prep->bindValue(':eventTwitterUrl', $value['twitterUrl']);
        $prep->bindValue(':eventSoundcloudUrl', $value['soundcloudUrl']);
        $prep->bindValue(':eventIframeSoundcloud', $value['iframeSoundcloud']);
        $prep->bindValue(':eventIframeYoutube', $value['iframeYoutube']);
        $prep->bindValue(':eventLaklak', $value['laklak']);
        $prep->bindValue(':eventArtistes', $value['artistes']);
        $prep->bindValue(':eventIdArtiste', $value['idArtiste']);
        $prep->bindValue(':eventImgCoverPath', $uploadfilec);
        $prep->bindValue(':eventImgProfilePath', $uploadfilep);
        $prep->bindValue(':eventType', $value['type']);
        $prep->bindValue(':eventMoreUrl', $value['moreUrl']);
        $prep->bindValue(':eventBookingUrl', $value['bookingUrl']);
        $prep->execute();
    }

    public function showOneEvent($id)
    {
        // requete sql pour récupérer un event dans un tableau d'objets Events
        $req = "SELECT * FROM event WHERE id=:id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id', $id);
        $prep->execute();
        $res = $prep->fetchAll(\PDO::FETCH_CLASS, 'laklak\Model\Event');
        return $res[0];
    }

    public function updateEvent($value, $file)
    {
        if ($file['imgEvenement']['name'] != null){
            $uploaddir = 'images/Upload/Event/';
            $uploadfilep = $uploaddir . basename($file['imgEvenement']['name']);
            move_uploaded_file($file['imgEvenement']['tmp_name'], $uploadfilep);
        }
        else {
            $event = $this->showOneEvent($value['id']);
            var_dump($event);
            $uploadfilep = $event->getEventImgProfilePath();
        }
        if ($file['imgCoverEvenement']['name'] != null){
            $uploaddir = 'images/Upload/Event/';
            $uploadfilec = $uploaddir . basename($file['imgCoverEvenement']['name']);
            move_uploaded_file($file['imgCoverEvenement']['tmp_name'], $uploadfilec);
        }
        else {
            $event = $this->showOneEvent($value['id']);
            $uploadfilec = $event->getEventImgCoverPath();
        }
        if($value['idArtiste'] == ''){
            $value['idArtiste'] = NULL;
        } else {
            $value['idArtiste'] = intval($value['idArtiste']);
        }
        if($value['laklak'] == ''){
            $value['laklak'] = NULL;
        } else {
            $value['laklak'] = intval($value['laklak']);
        }
        $req = "UPDATE event SET eventName=:eventName, eventDescription=:eventDescription, eventLocation=:eventLocation,
        eventDate=:eventDate, eventProduction=:eventProduction, eventWebsiteUrl=:eventWebsiteUrl, eventFacebookUrl=:eventFacebookUrl
        , eventTwitterUrl=:eventTwitterUrl, eventSoundcloudUrl=:eventSoundcloudUrl, eventIframeYoutube=:eventIframeYoutube,
         eventIframeSoundcloud=:eventIframeSoundcloud, eventArtistes=:eventArtistes, eventLaklak=:eventLaklak,
         eventIdArtiste=:eventIdArtiste, eventImgCoverPath=:eventImgCoverPath, eventImgProfilePath=:eventImgProfilePath,
        eventType=:eventType, eventMoreUrl=:eventMoreUrl, eventBookingUrl=:eventBookingUrl WHERE id = :id";
        $prep = $this->bdd->prepare($req);
        $prep->bindValue(':id', $value['id']);
        $prep->bindValue(':eventName', $value['nom']);
        $prep->bindValue(':eventDescription', $value['description']);
        $prep->bindValue(':eventLocation', $value['lieu']);
        $prep->bindValue(':eventDate', $value['date']);
        $prep->bindValue(':eventProduction', $value['production']);
        $prep->bindValue(':eventWebsiteUrl', $value['websiteUrl']);
        $prep->bindValue(':eventFacebookUrl', $value['facebookUrl']);
        $prep->bindValue(':eventTwitterUrl', $value['twitterUrl']);
        $prep->bindValue(':eventSoundcloudUrl', $value['soundcloudUrl']);
        $prep->bindValue(':eventIframeSoundcloud', $value['iframeSoundcloud']);
        $prep->bindValue(':eventIframeYoutube', $value['iframeYoutube']);
        $prep->bindValue(':eventLaklak', $value['laklak']);
        $prep->bindValue(':eventArtistes', $value['artistes']);
        $prep->bindValue(':eventIdArtiste',$value['idArtiste']);
        $prep->bindValue(':eventImgCoverPath', $uploadfilec);
        $prep->bindValue(':eventImgProfilePath', $uploadfilep);
        $prep->bindValue(':eventType', $value['type']);
        $prep->bindValue(':eventMoreUrl', $value['moreUrl']);
        $prep->bindValue(':eventBookingUrl', $value['bookingUrl']);
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