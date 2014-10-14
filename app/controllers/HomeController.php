<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$data = Data::find(1);
		if (!$data) {
			$data = Data::create(array('status' => 0));
		}else{
			$status = $data->status;
		}
		return View::make('home')->with('status', $status);
	}

	public function syncServer($id)
	{
		$data = Data::find(1);
		if (!$data) {
			$data = Data::create(array('status' => 0));
		}else{
			$status = $data->status;
		}
		if ($status == 1) {
			return '>>>1>>>0>>>0>>>0>>>0>>>0>>>';
		}else{
			return '>>>0>>>0>>>0>>>0>>>0>>>0>>>';
		}
	}

	public function turnOn()
	{
		$data = Data::find(1);
		if (!$data) {
			$data = Data::create(array('status' => 1));
		}else{
			$data->status = 1;
			$data->save();
		}
		return Redirect::to('/');
	}

	public function turnOff()
	{
		$data = Data::find(1);
		if (!$data) {
			$data = Data::create(array('status' => 0));
		}else{
			$data->status = 0;
			$data->save();
		}
		return Redirect::to('/');
	}

}
