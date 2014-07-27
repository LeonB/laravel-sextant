<?php namespace LeonB\Sextant\Controllers;

class SextantController extends \BaseController
{
	public function routes()
	{
		$routes = \LeonB\Sextant\Models\Route::getAll();
		return \View::make('sextant::routes', array('routes' => $routes));
	}
}
