<?php namespace LeonB\Sextant\Models;

class RouteCollection extends \Illuminate\Foundation\Console\RoutesCommand {

	public function __construct()
	{
		$router = app()->router;
		return parent::__construct($router);
	}

	/**
	 * Compile the routes into a displayable format.
	 *
	 * @return array
	 */
	public function getRoutes()
	{
		return parent::getRoutes();
	}

	public function getHeaders()
	{
		return $this->headers;
	}

	/**
	 * Filter the route by URI and / or name.
	 *
	 * @param  array  $route
	 * @return array|null
	 */
	protected function filterRoute(array $route)
	{
		return $route;
	}
}
