<?php

switch ($_SERVER['REQUEST_URI']) {
    case 'projects':
        require './views/projects.view.php';
        break;


    case 'info':
        require './views/info.view.php';
        break;


    case 'contact':
        require './views/contact.view.php';
        break;


    default:
        require  './views/home.view.php';
        break;

}