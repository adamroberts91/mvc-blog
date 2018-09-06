<?php
//Include config
error_reporting( ~E_NOTICE );
include('config.php');

include('classes/Bootstrap.php');
include('classes/Controller.php');
include('classes/Model.php');

include('controllers/home.php');
include('controllers/shares.php');
include('controllers/users.php');

include('models/home.php');
include('models/share.php');
include('models/user.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller) {
    $controller->executeAction();
}