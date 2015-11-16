<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
*	точка входа в программу
*	подгружение model,controller.
*/

include_once 'model/model.php';
include_once 'model/PostsModel.php';
include_once 'Controller/controller.php';
include_once 'router/routing.php';
echo $response;
?>
	
	