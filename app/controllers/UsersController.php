<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Redirect::to('/user/dashboard');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function signup()
	{
		return View::make('users.signup');
	}

	public function login()
	{
		return View::make('users.login');
	}

	public function logout()
	{
		Auth::logout();
		Session::flash('flash_msg', "Vous avez été deconnecté");
		return Redirect::to('/user');
	}

	public function authenticate()
	{
		$request = Request::input();
		$username = $request['username'];
		$password = $request['password'];

		if(Auth::attempt(['username' => $username, 'password' => $password])){
			Session::flash('flash_msg', "Vous êtes bien connecté");
			return Redirect::intended('/user/dashboard');
		}else{
			return 'erreur';
		}
	}

	public function dashboard()
	{
		$user = ["username" => Auth::user()->username, "id" => Auth::user()->id];
		return View::make('users.dashboard')->with('user', $user);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$request = Request::input();	
		$user = new User;
		$user->username = $request['username'];
		$user->password = Hash::make($request['password']);
		$user->email = $request['email'];

		$user->save();

		return Redirect::to('/user');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "Profil de l'utilisateur " . $id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


}
