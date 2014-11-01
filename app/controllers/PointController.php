<?php

class PointController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$women = Member::women()->get();
		$men = Member::men()->get();
		
		return View::make('points.index', compact('women', 'men'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{	
		$points = Input::get('points');

		if ( (is_numeric($points)) && ($points >= 0) ) {
			$member = Member::find($id);
			$member->points = $points;
			$member->save();

			Flash::success($member->name() . ' hat ' . $points . ' P. erzielt.');
			return Redirect::back();
		} 
		else 
		{
			Flash::danger('Fehlerhafte Eingabe.');
			return Redirect::back();	
		}
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$member = Member::find($id);
		$member->points = NULL;
		$member->save();

		Flash::warning('Punkte von ' . $member->name() . ' wurden gelöscht.');
		return Redirect::back();
	}


}
