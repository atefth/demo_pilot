<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Data extends Eloquent {
	protected $fillable = array('status');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'data';

}
