<?php

require 'dbconnect.php';
require './controllers/homecontroller.php';
require './Controllers/contactcontroller.php';
require './Controllers/projectcontroller.php';
require './Controllers/infocontroller.php';

phpinfo();



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
        $contactController = new ContactController($conn);
        $contactController->SubmitForm();
        require 'views/contact.view.php';
        break;

    default:
        require 'views/index.view.php';
        break;
}
