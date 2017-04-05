<?php
require '../vendor/autoload.php';
use laklak\controller\DefaultController;




$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$default = new DefaultController();

switch ($page) {
    case 'a_propos':
        $view = $default->a_propos();
        break;
    case 'liste_artistes':
        $view = $default->liste_artistes();
        break;
    case 'liste_evenements':
        $view = $default->liste_evenements();
        break;
    case 'evenements':
        $view = $default->evenements();
        break;
    case 'contact':
        $view = $default->contact();
        break;
    case 'agenda':
        $view = $default->agenda();
        break;
    case 'artistes':
        $view = $default->artistes();
        break;
    default :
        $view = $default->index();


}

echo $view;
