<?php

class AdminController extends \BaseController {


	public function index()
	{
		$projects = DB::table('projects')->orderBy('position')->get();
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

		$maxPosition = Project::max('position'); // Position maximale du projet dans la table
		$currentPosition = $project->position; // Position actuelle du projet qu'on modifie
		$newPosition = $request['position']; // Position entrée dans le champ number('position')

		// Si on tente de changer la position du projet
		if($currentPosition != $newPosition)
		{
			// Si la position est < 1 ou si elle est trop elevée, erreur
			if($newPosition < 1 || $newPosition > $maxPosition)
			{
				Session::flash('flash_msg', "Impossible de définir cette position pour le projet.");
				Session::flash('flash_type', "alert");
				return Redirect::to('/admin/' . $id);
			}
			// Sinon on inverse la position des deux projets
			else
			{
				// Selection de l'autre projet : SOIT l'id qu'on souhaite définir SOIT la plus proche possible
				// dans le cas où on aurait supprimé un projet étant placé num. 1 par exemple
				$otherProject = Project::where('position', '>=', $newPosition)->orderBy('position')->first();
				$otherProject->position = $currentPosition; // Changer la position de l'autre projet avec l'actuelle de celui qu'on modifie
				$otherProject->save(); // Enregistrer sa nouvelle pos
				$project->position = $newPosition; // Définir la nouvelle position du projet qu'on change (anciennement celle de $otherProject)
			}
		}
		
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

		$position = Project::max('position') + 1;

			/* Remplir la base de données avec les nouvelles valeurs */
		$project->title = $request['title'];
		$project->subtitle = $request['subtitle'];
		$project->desc = $request['desc'];
		$project->link = $request['link'];
		$project->position = $position;

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

	/**
	 * Envoi d'images via le formulaire AJAX Dropzone
	 * Place les images dans /img/projectsImages/ et stocke les infos dans la table project_images
	 */
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

	/**
	 * Supprime une image précédemment envoyée en AJAX
	 * @param  int $id id de l'image dans la table project_images
	 */
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

	/**
	 * Met à jour le caption et l'attribut alt de l'image d'un projet
	 * @param  int $id id de l'image dans la table project_images
	 */
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
