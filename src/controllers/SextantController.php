<?php namespace LeonB\Sextant\Controllers;

class SextantController extends \BaseController
{
	public function routes()
	{
		$router = app()->router;
		$route = new \LeonB\Sextant\Models\Route($router);
		return $route->getRoutes();
		return Route::getRoutes();
		return \View::make('sextant::routes', array('routes' => $routes));
	}
}
