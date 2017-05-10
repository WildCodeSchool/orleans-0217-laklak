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

    public function Send($mail, $to)
    {
            // Create the Transport
            $transport = \Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
                ->setUsername($this->expediteur)
                ->setPassword('Laklak45');
            $mailer = \Swift_Mailer::newInstance($transport);

            $message = \Swift_Message::newInstance()
                ->setSubject($mail['sujet'])
                ->setFrom(array($mail['email'] => $mail['nom']))
                ->setSender($mail['email'], $mail['nom'])
                ->setReplyTo($mail['email'])
                ->setTo($to)
                ->addPart('
                <h1>Vous avez reçu un message de ' . $mail['nom'] . ' en tant que ' . $mail['type'] . '</h1> 
                <p>Email : ' . $mail['email'] . '<br/>
                Tel : ' . $mail['tel'] . '</p>
                <p>' . $mail['message'] . '</p>
                ', 'text/html');
           return $mailer->send($message);

    }

}
