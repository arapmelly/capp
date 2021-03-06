<?php

class LevelsController extends \BaseController {

	/**
	 * Display a listing of levels
	 *
	 * @return Response
	 */
	public function index()
	{
		$levels = Level::all();

		return View::make('Levels.index', compact('levels'));
	}

	/**
	 * Show the form for creating a new level
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('Levels.create');
	}

	/**
	 * Store a newly created level in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Level::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$level = new Level;
		$level->name = array_get($data, 'name');
		$level->description = array_get($data, 'description');
		$level->icon = array_get($data, 'icon');
		$level->save();

		return Redirect::route('levels.index');
	}

	/**
	 * Display the specified level.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$level = Level::findOrFail($id);

		return View::make('Levels.show', compact('level'));
	}

	/**
	 * Show the form for editing the specified level.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$level = Level::find($id);


		return View::make('Levels.edit', compact('level'));
	}

	/**
	 * Update the specified level in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$level = Level::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Level::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$level->name = array_get($data, 'name');
		$level->description = array_get($data, 'description');
		$level->update();

		return Redirect::route('levels.index');
	}

	/**
	 * Remove the specified level from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Level::destroy($id);

		return Redirect::route('levels.index');
	}

}
