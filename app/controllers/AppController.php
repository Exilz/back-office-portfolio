<?php

class AppController extends \BaseController {

	public function index()
	{
		Return View::make('public.index');
	}

	public function about()
	{
		Return View::make('public.about');
	}

	public function portfolio()
	{
		$projects = DB::table('projects')->orderBy('position')->get();
		Return View::make('public.portfolio', compact('projects'));
	}

	public function contact()
	{
		Return View::make('public.contact');
	}

	public function mentionsLegales()
	{
		Return View::make('public.mentions-legales');
	}

	/**
	 * Génère un fichier JSON contenant toutes les informations d'un projet et ses images
	 * @param  int $id id du projet
	 */
	public function projectJson($id)
	{
		$project = Project::find($id)->toArray();
		$projectImages = ["images" => ProjectImage::where('projectId', '=', $id)->get()->toArray()];
		$result = array_merge($project, $projectImages);
		return Response::json($result);
	}

}
