<?php

use Carbon\Carbon;
use Flashfight\Forms\Member as MemberForm;

class MemberController extends \BaseController {

	protected $memberForm;

	/**
	 * DI
	 * @param MemberForm $memberForm [description]
	 */
	public function __construct(MemberForm $memberForm) 
	{
		$this->memberForm = $memberForm;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$lastMembers = Member::orderBy('created_at', 'desc')->take(5)->get();
		$countMembers = Member::all()->count();

		return View::make('members.create', compact('lastMembers', 'countMembers'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$birthdayArray = explode('.', Input::get('birthday'));


		if (count($birthdayArray) == 3) {
			$year = $birthdayArray[2];
			$month = $birthdayArray[1];
			$day = $birthdayArray[0];
			$birthday = $year .'-'. $month .'-'. $day;

			$age = Carbon::createFromDate($year, $month, $day)->age;

			$parsedInput = [
				'firstname' => Input::get('firstname'),
				'lastname'  => Input::get('lastname'),
				'gender'    => Input::get('gender'),
				'birthday'  => $birthday,
				'age'       => $age
			];
		} else {
			Flash::error('Fehlerhafte Daten.');
			return Redirect::back()->withInput();
		}

		$this->memberForm->validate($parsedInput);

		$member = Member::create($parsedInput);

		Flash::success('Neuer Teilnehmer <strong>' . $member->name() .' (#'. $member->id .')</strong> wurde angemeldet.');
		return Redirect::back();
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
		Member::find($id)->delete();

		Flash::warning('Teilnehmer wurde gelöscht.');
		return Redirect::back();
	}


}
