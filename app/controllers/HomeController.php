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

	public function showWelcome()
	{
		return View::make('login');
	}

	public function login()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		$u = User::where('username', '=', $username)->first();
		if ($u) 
		{
			$class = $u->role;
			$class;
			if ($class->name == 'Programmer') 
			{
				return View::make('programmerLanding');
			} else if ($class->name == 'Graphic Designer')
			{
				return View::make('graphicDesignerLanding');
			}
			Session::flash('notice', 'Login Success!');
		}
		return View::make('login');
	}

	public function register()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		$class = Input::get('class');
		
		if ($class == 'Programmer')
		{
			$role = Role::where('name', '=', 'Programmer')->first();
			$p = User::create(array('username' => $username, 'password' => $password));
			$p->role()->associate($role);
			$p->save();
			return View::make('programmerLanding');
		} elseif ($class == 'Graphic Designer')
		{
			$role = Role::where('name', '=', 'Graphic Designer')->first();
			$gd = User::create(array('username' => $username, 'password' => $password));
			$gd->role()->associate($role);
			$gd->save();
			return View::make('graphicDesignerLanding');
		}
	}

}
