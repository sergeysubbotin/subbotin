<?php
/**
*	точка входа в программу
*	подгружение model,controller.
*/
echo $_SERVER["REQUEST_URI"];
$uri=$_SERVER["REQUEST_URI"];
$u=explode('?',$uri);
$uri=$u[0];
echo "<br>newUri=".$uri;

if($uri=="/2ktvrp/subbotin/" OR $uri=="/2ktvrp/subbotin/index.php")
{
	$response=list_action();
}
	elseif ($uri=="/2ktvrp/subbotin/index.php/admin") 
{
	$response=admin_action();
}
	elseif ($uri=="/2ktvrp/subbotin/index.php/autor")
{
	$response=autor_action();
}
	elseif ($uri=="/2ktvrp/subbotin/index.php/about")
{
	$response=about_action();
}
	elseif ($uri=="/2ktvrp/subbotin/index.php/show")
{
	$response = show_action($_REQUEST['id']);
}


	
	
	