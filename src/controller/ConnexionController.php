<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 07/04/17
 * Time: 09:46
 */

namespace laklak\controller;

class ConnexionController extends Controller
{

    private $email;

    private $mdp;


    public function connexion(array $connexion)
    {
        $this->email = $connexion['email'];
        $this->mdp = $connexion['mdp'];

        if($this->verif()){
            $_SESSION['email'] = $this->email;
            $_SESSION['mdp'] = $this->mdp;
        }

}
    public function verif()
    {
        $req = $this->bdd->prepare('SELECT id FROM admin WHERE email = :email AND password = :mdp');
        $req->bindValue(':email', $this->email, \PDO::PARAM_STR);
        $req->bindValue(':mdp', $this->mdp, \PDO::PARAM_STR);
        $req->execute();
        return (bool) $req->fetch();
    }

}