<?php

$requestUri = getCurrentUri();
$routes = getRoutes($requestUri);
print_r($routes);

if(count($routes) < 1)
{
	echo "home page!";
	
}

else if(isset($routes[0]))
{
	echo "testing";
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