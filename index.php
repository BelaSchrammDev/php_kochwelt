<?php

require_once 'app/controllers/main.php';
require_once 'app/controllers/imprint.php';
require_once 'app/controllers/policy.php';
require_once 'app/controllers/contact.php';

include './config.php';

switch ($current_page) {
    case 'policy':
        $controller = new PolicyController();
        $controller->content();
        break;
    case 'imprint':
        $controller = new ImprintController();
        $controller->content();
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->content();
        break;
    default:
        $controller = new MainController();
        $controller->content();
        break;
}
