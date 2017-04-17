<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 17/04/17
 * Time: 13:12
 */

namespace laklak\Model;


use laklak\controller\MailController;

class AdminManager extends Manager
{
    public function addAdmin(Admin $admin)
    {
        $req = $this->bdd->prepare('INSERT INTO admin(email, password) VALUES (:email, :password)');
        $req->bindValue(':email', $admin->getEmail());
        $req->bindValue(':password', sha1($admin->getPassword()));
        $req->execute();

        $send = new MailController();
        $send->Send(array(
                'email' => $send->expediteur,
                'sujet' => 'Vous êtes à présent Administrateur du site LAKLAK',
                'nom' => 'LAKLAK PRODUCTION',
                'tel' => '+00 000 000 0',
                'message' => 'Bonjour, vous avez été ajouté comme administrateur au site LAKLAK PRODUCTION. <br/> Votre mot de passe est :' . $admin->getPassword(),
            ), $admin->getEmail()
        );

    }

    public function updateAdmin()
    {

    }

    public function selectAllAdmin()
    {
        $req = $this->bdd->query('SELECT * FROM admin');
        $req->execute();
        return $req->fetchAll();
    }

    public function deleteAdmin($id)
    {
        $req = $this->bdd->query('DELETE FROM admin WHERE id = ' . $id . '');
        $req->execute();
    }
}