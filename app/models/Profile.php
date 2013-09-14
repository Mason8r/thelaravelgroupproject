<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Profile extends Eloquent implements UserInterface, RemindableInterface {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';


	public function profiles() {
	
		return $this->hasMany('Profile'); 

	}

	public function user() {

		return $this->belongsTo('User'); 

	}

}