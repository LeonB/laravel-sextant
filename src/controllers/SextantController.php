<?php namespace LeonB\Sextant\Controllers;

class SextantController extends \BaseController
{
	public function routes()
	{
		return 'adafd';
		return \View::make('newpackage::newpackageview')->with('route_name','This is called from newpackage controller');
	}
}

// Route::get('/laravel/info/routes/', function()
// {
// 	// dd(Route::getRoutes());

// 	$routes = Route::getRoutes();
// 	foreach($routes as $route)
// 	{
// 		$results[] = Route::getRouteInformation($route);
// 	}
// 	return $results;
// 	return 'Dit is een test';
// 	return View::make('hello');
// });

// protected function getRouteInformation(Route $route)
// {
// 	$uri = implode('|', $route->methods()).' '.$route->uri();

// 	return $this->filterRoute(array(
// 		'host'   => $route->domain(),
// 		'uri'    => $uri,
// 		'name'   => $route->getName(),
// 		'action' => $route->getActionName(),
// 		'before' => $this->getBeforeFilters($route),
// 		'after'  => $this->getAfterFilters($route)
// 	));
// }
