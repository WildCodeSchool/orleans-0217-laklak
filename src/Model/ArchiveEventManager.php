<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 19/04/17
 * Time: 12:57
 */

public function addEvent(array $value,$file)
    {
        $imgFileP = $file['imgEvenement']['name'];
        $tmpDirP = $file['imgEvenement']['tmp_name'];
        $imgSizeP = $file['imgEvenement']['size'];

        $imgFileC = $file['imgCoverEvenement']['name'];
        $tmpDirC = $file['imgCoverEvenement']['tmp_name'];
        $imgSizeC = $file['imgCoverEvenement']['size'];

        $uploaddir = 'images/Upload/Event/';

        $imgExtP = strtolower(pathinfo($imgFileP,PATHINFO_EXTENSION));
        $imgExtC = strtolower(pathinfo($imgFileC,PATHINFO_EXTENSION));

        $valid_extensions = array('jpeg','jpg','png','gif');

        $imgEvtP = rand(1000,1000000).".".$imgExtP;
        $imgEvtC = rand(1000,1000000).".".$imgExtC;


        if(in_array($imgExtP,$valid_extensions)){
            if($imgSizeP < 5000000){
                move_uploaded_file($tmpDirP,$uploaddir.$imgEvtP);
                }
            }

        if(in_array($imgExtC,$valid_extensions)){
            if($imgSizeC < 5000000){
                move_uploaded_file($tmpDirC,$uploaddir.$imgEvtC);
            }
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
        $prep->bindValue(':eventImgCoverPath',$imgEvtC);
        $prep->bindValue(':eventImgProfilePath',$imgEvtP);
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

    public function updateEvent($id,$value,$file)
    {
        $imgFileP = $file['imgEvenement']['name'];
        $tmpDirP = $file['imgEvenement']['tmp_name'];
        $imgSizeP = $file['imgEvenement']['size'];

        $imgFileC = $file['imgCoverEvenement']['name'];
        $tmpDirC = $file['imgCoverEvenement']['tmp_name'];
        $imgSizeC = $file['imgCoverEvenement']['size'];

        $uploaddir = 'images/Upload/Event/';

        $imgExtP = strtolower(pathinfo($imgFileP,PATHINFO_EXTENSION));
        $imgExtC = strtolower(pathinfo($imgFileC,PATHINFO_EXTENSION));

        $valid_extensions = array('jpeg','jpg','png','gif');

        $imgEvtP = rand(1000,1000000).".".$imgExtP;
        $imgEvtC = rand(1000,1000000).".".$imgExtC;


        if(in_array($imgExtP,$valid_extensions)){
            if($imgSizeP < 5000000){
                move_uploaded_file($tmpDirP,$uploaddir.$imgEvtP);
            }
        }

        if(in_array($imgExtC,$valid_extensions)){
            if($imgSizeC < 5000000){
                move_uploaded_file($tmpDirC,$uploaddir.$imgEvtC);
            }
        }


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
        $prep->bindValue(':eventImgCoverPath',$imgEvtC);
        $prep->bindValue(':eventImgProfilePath',$imgEvtP);
        $prep->bindValue(':eventType',$value['type']);
        $prep->bindValue(':eventMoreUrl',$value['moreUrl']);
        $prep->bindValue(':eventBookingUrl',$value['bookingUrl']);

        $prep->execute();

    }
