<?php
require_once("php/controllers.php");

$requestUri = getCurrentUri();
$routes = getRoutes($requestUri);

if(count($routes) < 1)
{
	home_page_controller();
	
}

else if(count($routes) >= 1)
{
	if(strtolower($routes[0]) == "crazy")
	{
		crazy_page_controller();
	}
}


//get the current uri
function getCurrentUri()
{
	$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
	$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
	if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
	$uri = '/' . trim($uri, '/');
	return $uri;
}

//based on a uri passed in as a parameter, return an array of the routes contained in that uri 
function getRoutes($uri)
{
	$routes = Array();
	$routes = explode("/", $uri);
	$finalRoutes = Array();
	foreach($routes as $route)
	{
		if($route != "")
			$finalRoutes[] = $route;
	}
	return $finalRoutes;
}

?>