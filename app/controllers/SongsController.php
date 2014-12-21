<?php

class SongsController extends BaseController {

	public function index()
	{
		$songs = Song::get();
		return View::make('songs.index', compact('songs'));
	}

	public function show($slug)
	{
		$song = Song::whereSlug($slug)->first();
		return View::make('songs.show', compact('song'));
	}

	public function edit($slug)
	{
		$song = Song::whereSlug($slug)->first();

		return View::make('songs.edit', compact('song'));
	}

	public function update($slug)
	{
		$song = Song::whereSlug($slug)->first();
		
		// $song->title = Request::get('title');
		// $song->save();

		// $song->fill(['title' => Request::get('title'), 'lyrics' => Request::get('lyrics')])->save();
		// 
		
		$song->fill(Request::input())->save();

		return Redirect::to('/songs');
	}

	public function create(){

		return View::make('songs.create');

	}

	public function store(){
		$song = new Song;
		$song->fill(Request::input());
		$song->slug = Str::slug(Request::get('title'));
		$song->save();

		return Redirect::to('/songs');
	}
}
