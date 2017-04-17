<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 17/04/17
 * Time: 10:51
 */

namespace laklak\controller;


class MailController extends Controller
{


    public function Send()
    {
        $alert = '';
        if (isset($_POST['mail'])) {
            // Create the Transport
            $transport = \Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
                ->setUsername('teamwilders45@gmail.com')
                ->setPassword('laklak45');
            $mailer = \Swift_Mailer::newInstance($transport);

            $message = \Swift_Message::newInstance()
                ->setSubject($_POST['sujet'])
                ->setFrom(array($_POST['email'] => $_POST['nom']))
                ->setSender($_POST['email'], $_POST['nom'])
                ->setReplyTo($_POST['email'])
                ->setTo(array('teamwilders45@gmail.com'))
                ->addPart('
                <h1>Vous avez reçu un message de ' . $_POST['nom'] . '</h1> 
                <p>Email : ' . $_POST['email'] . '<br/>
                Tel : ' . $_POST['tel'] . '</p>
                <p>' . $_POST['message'] . '</p>
                ', 'text/html');

            if (0 == $mailer->send($message)) {
                $alert = 2;
            } else {
                $alert = 1;
            };


        }
        return $this->getTwig()->render('contact.html.twig', array('alert' => $alert));

    }

}