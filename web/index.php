<?php
require '../vendor/autoload.php';
use laklak\controller\DefaultController;
use laklak\controller\AdminController;




$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


//Si l'admin est connecté (simulé par le Get['id'] )
//On redirige l'admin vers les pages admin
if(isset($_GET['id'])){

    $default = new AdminController(false);

    switch ($page) {
        case 'index':
            $view = $default->index();
            break;
        case 'agenda':
            $view = $default->index();
            break;
        default :
            $view = $default->index();

    }
}
//Sinon, on redirige l'utilisateur vers les pages du front
else {

    $default = new DefaultController(true);

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

}



echo $view;
