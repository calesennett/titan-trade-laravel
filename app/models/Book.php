<?php

class Book extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = array('isbn');
	protected $table = 'book';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function category()
	{
		return $this->belongsTo('Category');
	}
}