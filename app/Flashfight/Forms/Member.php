<?php namespace Flashfight\Forms;

use Laracasts\Validation\FormValidator;

class Member extends FormValidator {

	/**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
		'firstname' => 'required',
		'lastname'  => 'required',
		'gender'    => 'required|size:1',
		'birthday'  => 'required|date',
    ];

}