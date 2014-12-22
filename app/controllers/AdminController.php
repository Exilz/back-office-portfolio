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

	/**
	 * Action de connexion au back-office
	 */
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

	/**
	 * Editer un projet
	 * @param  int $id id du projet
	 */
	public function edit($id)
	{
		// ProjectImage::where('project-id', '=', 1)->firstOrFail();
		$project = Project::find($id);
		$projectImages = ProjectImage::where('projectId', '=', $id)->get();
		return View::make('private.edit')->with('project', $project)->with('projectImages', $projectImages);
	}

	/**
	 * Action d'édition d'un projet
	 * @param  int $id id du projet
	 */
	public function update($id)
	{
		$request = Request::all();
		$project = Project::find($id);
		$logoFile = Input::file('logo');

			/* Remplir la base de données avec les nouvelles valeurs */
		$project->title = $request['title'];
		$project->subtitle = $request['subtitle'];
		$project->desc = $request['desc'];
		$project->link = $request['link'];

			/* Remplir la BDD avec le nouveau logo si il a été changé */
		if(isset($logoFile)){
			$logoPath = public_path() . '\img';
			$logoName = $project->id . '_tb.' . $logoFile->guessClientExtension();
			$logoFile->move($logoPath, $logoName);
			$project->logo = $logoName;
		}
		
		$project->save();

		Session::flash('flash_msg', "Projet " . $project->title . " modifié avec succès.");
		Session::flash('flash_type', "success");		

		return Redirect::to('/admin/' . $id);
	}

	public function add()
	{
		return View::make('private.add');
	}

	/**
	 * Action de stockage d'un nouveau projet
	 */
	public function store()
	{
		$request = Request::input();
		$project = new Project;
		$logoFile = Input::file('logo');

			/* Remplir la base de données avec les nouvelles valeurs */
		$project->title = $request['title'];
		$project->subtitle = $request['subtitle'];
		$project->desc = $request['desc'];
		$project->link = $request['link'];

			/* Remplir la BDD avec le nouveau logo si il a été changé */
		if(isset($logoFile)){
			$logoPath = public_path() . '\img';
			$logoName = $project->id . '_tb.' . $logoFile->guessClientExtension();
			$logoFile->move($logoPath, $logoName);
			$project->logo = $logoName;
		}
		
		$project->save();

		Session::flash('flash_msg', "Projet " . $project->title . " ajouté avec succès.");
		Session::flash('flash_type', "success");	

		return Redirect::to('/admin/' . $project->id);
	}

	/**
	 * Action de suppression d'un projet
	 * @param  int $id ID du projet
	 */
	public function destroy($id)
	{
		$project = Project::find($id);
		Project::destroy($id);

		Session::flash('flash_msg', "Projet " . $project->title . " supprimé avec succès.");
		Session::flash('flash_type', "warning");

		return Redirect::to('/admin');	

	}

	public function uploadImages()
	{
		$projectImage = new ProjectImage;
		$project = Project::find(Request::get('id'));


		$file = Input::file('file');
		$fileName = $project->id . '_' . $file->getClientOriginalName();
		$filePath = public_path() . '/img/projectsImages/';

		$file->move($filePath, $fileName);

		$projectImage->src = $fileName;
		$projectImage->caption = "Caption de l'image";
		$projectImage->alt = "Attribut alt de l'image";
		$projectImage->projectId = $project->id;
		$projectImage->save();
	}

	public function destroyImage($id)
	{
		$file = public_path() . '/img/projectsImages/' . ProjectImage::find($id)->src;
		$fileName = ProjectImage::find($id)->src;

		if(is_file($file))
		{	
			unlink($file);
		}

		ProjectImage::destroy($id);

		Session::flash('flash_msg', "'$fileName' supprimé avec succès.");
		Session::flash('flash_type', "warning");	

		return Redirect::to(URL::previous());

	}

	public function updateImage($id)
	{
		$image = ProjectImage::find($id);
		$request = Request::all();

		$image->fill($request)->save();

		Session::flash('flash_msg', "Attributs de l'image modifiés avec succès.");
		Session::flash('flash_type', "success");		
		
		return Redirect::to(URL::previous());
	}



}
