<?php

require 'dbconnect.php';
require './controllers/homecontroller.php';
require './Controllers/ContactController.php';
require './Controllers/projectcontroller.php';
require './Controllers/InfoController.php';



$requestUri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';

switch ($requestUri) {
    case '':
    case '/':
    case '/home':
        require 'views/home.view.php';
        break;

    case '/projects':
        require 'views/projects.view.php';
        break;

    case '/info':
        require 'views/info.view.php';
        break;

    case '/contact':
        require 'views/contact.view.php';
        break;

    default:
        require 'views/index.view.php';
        break;
}
