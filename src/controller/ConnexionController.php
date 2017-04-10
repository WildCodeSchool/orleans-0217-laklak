<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 07/04/17
 * Time: 09:46
 */

namespace laklak\controller;

require __DIR__ . '/../../app/config/connect.php';

class ConnexionController extends Controller
{
    protected $bdd;

    public function __construct()
    {
        parent::__construct();
        $this->bdd = new \PDO(DSN,USER,PASS);
    }

    private $email;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    private $mdp;


    public function connexion(array $connexion)
    {
        $this->setEmail($connexion['email']);
        $this->setMdp(sha1($connexion['mdp']));

        if($this->verif()){
            $_SESSION['email'] = $this->getEmail();
            $_SESSION['mdp'] = $this->getMdp();
        }

}
    public function verif()
    {
        $req = $this->bdd->prepare('SELECT id FROM admin WHERE email = :email AND password = :mdp');
        $req->bindValue(':email', $this->getEmail(), \PDO::PARAM_STR);
        $req->bindValue(':mdp', $this->getMdp(), \PDO::PARAM_STR);
        $req->execute();
        return (bool) $req->fetch();
    }

}