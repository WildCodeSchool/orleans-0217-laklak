<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 17/04/17
 * Time: 15:14
 */

namespace laklak\controller;


class ContactController extends Controller
{
    public function contact()
    {
        $alert = '';
        if (isset($_POST['mail'])) {
            $send = new MailController();
            if (0 == $send->Send($_POST, $this->expediteur)) {
                $alert = 2;
            } else {
                $alert = 1;
            };
        }
        return $this->getTwig()->render('contact.html.twig', array('alert' => $alert));
    }
}