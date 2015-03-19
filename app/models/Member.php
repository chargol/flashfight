<?php

use Carbon\Carbon;

class Member extends Eloquent  {

	protected $fillable = ['firstname', 'lastname', 'birthday', 'gender', 'age'];

	public function name()
	{
		return $this->firstname .' '. $this->lastname;
	}

	public function getDates()
	{
		return ['birthday', 'created_at', 'updated_at'];
	}

	public function scopeWomen($query)
	{
		return $query->whereGender('w');
	}

	public function scopeMen($query)
	{
		return $query->whereGender('m');
	}

	public function scopeAdult($query)
	{
		return $query->where('age', '>=', '19');
	}

	public function scopeYouth($query)
	{
	 	return $query->where('age', '<', '19');
	}

	public function scopeOrderByName($query)
	{
		return $query->orderBy('lastname')->orderBy('firstname');
	}

	public function scopeBest($query)
	{
		return $query->orderBy('points', 'desc');
	}

}
