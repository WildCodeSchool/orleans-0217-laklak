<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 17/04/17
 * Time: 13:04
 */

namespace laklak\controller;


use laklak\Model\Admin;
use laklak\Model\AdminManager;

class AdministrateurController extends Controller
{

    public function Admin()
    {
        $adminManager = new AdminManager();

        if (isset($_POST['addAdmin'])) {
            $admin = new Admin($_POST);
            $adminManager->addAdmin($admin);
        }
        if (isset($_POST['deleteAdmin'])) {
            $adminManager->deleteAdmin($_POST['id']);
        }


        return $this->getTwig()->render('gestionAdmin.html.twig', array(
            'admins' => $adminManager->selectAllAdmin(),
        ));

    }
}