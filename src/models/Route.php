<?php namespace LeonB\Sextant\Models;

class Route {

	/**
	 * The router instance.
	 *
	 * @var \Illuminate\Routing\Router
	 */
	protected $router;

	/**
	 * An array of all the registered routes.
	 *
	 * @var \Illuminate\Routing\RouteCollection
	 */
	protected $routes;

	/**
	 * The table headers for the command.
	 *
	 * @var array
	 */
	protected $headers = array(
		'Domain', 'URI', 'Name', 'Action', 'Before Filters', 'After Filters'
	);

	/**
	 * Create a new route command instance.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function __construct(\Illuminate\Routing\Router $router)
	{
		$this->router = $router;
		// $this->routes = $router->getRoutes();
	}

	/**
	 * Compile the routes into a displayable format.
	 *
	 * @return array
	 */
	public function getRoutes()
	{
		$results = array();

		$routes = $this->router->getRoutes();
		foreach($routes as $route)
		{
			$results[] = $this->getRouteInformation($route);
		}

		return array_filter($results);
	}

	/**
	 * Get the route information for a given route.
	 *
	 * @param  string  $name
	 * @param  \Illuminate\Routing\Route  $route
	 * @return array
	 */
	protected function getRouteInformation(\Illuminate\Routing\Route $route)
	{
		$uri = implode('|', $route->methods()).' '.$route->uri();

		return $this->filterRoute(array(
			'host'   => $route->domain(),
			'uri'    => $uri,
			'name'   => $route->getName(),
			'action' => $route->getActionName(),
			'before' => $this->getBeforeFilters($route),
			'after'  => $this->getAfterFilters($route)
		));
	}

	/**
	 * Get before filters
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @return string
	 */
	protected function getBeforeFilters($route)
	{
		$before = array_keys($route->beforeFilters());

		$before = array_unique(array_merge($before, $this->getPatternFilters($route)));

		return implode(', ', $before);
	}

	/**
	 * Get all of the pattern filters matching the route.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @return array
	 */
	protected function getPatternFilters($route)
	{
		$patterns = array();

		foreach ($route->methods() as $method)
		{
			// For each method supported by the route we will need to gather up the patterned
			// filters for that method. We will then merge these in with the other filters
			// we have already gathered up then return them back out to these consumers.
			$inner = $this->getMethodPatterns($route->uri(), $method);

			$patterns = array_merge($patterns, array_keys($inner));
		}

		return $patterns;
	}

	/**
	 * Get the pattern filters for a given URI and method.
	 *
	 * @param  string  $uri
	 * @param  string  $method
	 * @return array
	 */
	protected function getMethodPatterns($uri, $method)
	{
		return $this->router->findPatternFilters(\Request::create($uri, $method));
	}

	/**
	 * Get after filters
	 *
	 * @param  Route  $route
	 * @return string
	 */
	protected function getAfterFilters($route)
	{
		return implode(', ', array_keys($route->afterFilters()));
	}

	/**
	 * Filter the route by URI and / or name.
	 *
	 * @param  array  $route
	 * @return array|null
	 */
	protected function filterRoute(array $route)
	{
		if (($this->option('name') && ! str_contains($route['name'], $this->option('name'))) ||
			 $this->option('path') && ! str_contains($route['uri'], $this->option('path')))
		{
			return null;
		}
		else
		{
			return $route;
		}
	}

	protected function option()
	{
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
