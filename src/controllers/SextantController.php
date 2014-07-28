<?php namespace LeonB\Sextant\Controllers;

use \LeonB\Sextant\Models\RouteCollection;

class SextantController extends \BaseController
{
	public function routes()
	{
		$routeCollection = new RouteCollection();
		return \View::make('sextant::routes', array(
			'headers'         => $routeCollection->getHeaders(),
			'routes'          => $routeCollection->getRoutes(),
			'routeCollection' => $routeCollection
		));
	}
}
