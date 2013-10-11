<?php
require_once('FormController.php');

global $_REQUEST;

$controller = new FormController();
$controller->handleRequest($_REQUEST);
?>