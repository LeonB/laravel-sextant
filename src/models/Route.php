<?php namespace LeonB\Sextant\Models;

class Route {

	public static function getAll() {
		return \Route::getRoutes();
	}
}

// +--------+------------------------------+------+----------------------------------------------------+----------------+---------------+
// | Domain | URI                          | Name | Action                                             | Before Filters | After Filters |
// +--------+------------------------------+------+----------------------------------------------------+----------------+---------------+
// |        | GET|HEAD laravel/info/routes |      | LeonB\Sextant\Controllers\SextantController@routes |                |               |
// |        | GET|HEAD /                   |      | Closure                                            |                |               |
// +--------+------------------------------+------+----------------------------------------------------+----------------+---------------+

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
