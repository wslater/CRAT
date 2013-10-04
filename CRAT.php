<?php
require_once('CRATController.php');

global $_REQUEST;

$controller = new CRATController();
$controller->handleRequest($_REQUEST);
?>