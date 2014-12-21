<?php

class AdminController extends \BaseController {

	public function index()
	{
		$projects = Project::all();
		Return View::make('private.index')->with('projects', $projects);
	}

	public function login()
	{
		Return View::make('private.login');
	}

	public function logout()
	{
		Auth::logout();
		Return Redirect::to('/');
	}

	public function authenticate()
	{
		$username = Request::input()['username'];
		$password = Request::input()['password'];

		if(Auth::attempt(['username' => $username, 'password' => $password], true))
		{
			Session::flash('flash_msg', "Tu t'es connecté, t'es bien dans le quartier.");
			Session::flash('flash_type', "success");
			return Redirect::intended('/admin');
		}
		else
		{
			Session::flash('flash_msg', "Identifiants incorrects, fuis de mon Portfolio stplz.");
			Session::flash('flash_type', "alert");
			return Redirect::to('/admin/login');
		}
	}

	public function edit($id)
	{
		$project = Project::find($id);
		return View::make('private.edit')->with('project', $project);
	}

	public function update($id)
	{
		$request = Request::all();
		$project = Project::find($id);

		$project->fill($request)->save();

		Session::flash('flash_msg', "Projet " . $project->title . " modifié avec succès.");
		Session::flash('flash_type', "success");		

		return Redirect::to('/admin/' . $id);
	}

	public function add()
	{
		return View::make('private.add');
	}

	public function store()
	{
		$request = Request::input();
		$project = new Project;

		$project->fill($request)->save();

		Session::flash('flash_msg', "Projet " . $project->title . " ajouté avec succès.");
		Session::flash('flash_type', "success");	

		return Redirect::to('/admin/' . $project->id);
	}

	public function destroy($id)
	{
		$project = Project::find($id);
		Project::destroy($id);

		Session::flash('flash_msg', "Projet " . $project->title . " supprimé avec succès.");
		Session::flash('flash_type', "warning");

		return Redirect::to('/admin');	

	}



}
