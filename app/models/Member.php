<?php

class Member extends Eloquent  {

	protected $fillable = ['firstname', 'lastname', 'birthday', 'gender'];

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
		return $query->whereGender('w')->orderByName();
	}

	public function scopeMen($query)
	{
		return $query->whereGender('m')->orderByName();
	}

	public function scopeOrderByName($query)
	{
		return $query->orderBy('lastname')->orderBy('firstname');
	}

}
