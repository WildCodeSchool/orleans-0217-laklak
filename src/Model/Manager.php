<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 07/04/17
 * Time: 10:04
 */

namespace laklak\Model;

require __DIR__ . '/../../app/config/connect.php';

class Manager
{
    protected $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO(DSN,USER,PASS);
    }
}