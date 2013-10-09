<?php

class Trade extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'trade';

	protected $fillable = array('book_id');

	public function book()
	{
		return $this->hasMany('Book');
	}

}