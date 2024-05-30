<?php

$router->get('/',base_path("Controllers/homeController.php"));
$router->get('/login',base_path("Controllers/loginController.php"));
$router->get('/register',base_path("Controllers/registerController.php"));

$router->post('/register',base_path("Controllers/registerController.php"));