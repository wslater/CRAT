<?php
require_once("../config/config.php");
require_once(CRAT_CONTROLLERS.'FormController.php');

global $_REQUEST;

$controller = new FormController();
$controller->handleRequest($_REQUEST);
?>