<?php
require '../vendor/autoload.php';
use laklak\controller\DefaultController;




$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$default = new DefaultController();

switch ($page) {
    case 'presentation':
        $view = $default->presentation();
        break;
    case 'agenda':
        $view = $default->agenda();
        break;
    default :
        $view = $default->index();

}

echo $view;
