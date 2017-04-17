<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 17/04/17
 * Time: 13:12
 */

namespace laklak\Model;


class AdminManager extends Manager
{
    public function addAdmin(Admin $admin)
    {
        $req = $this->bdd->prepare('INSERT INTO admin(email, password) VALUES (:email, :password)');
        $req->bindValue(':email', $admin->getEmail());
        $req->bindValue(':password', sha1($admin->getPassword()));
        $req->execute();
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
        $req = $this->bdd->query('DELETE FROM admin WHERE id = '.$id.'');
        $req->execute();
    }
}