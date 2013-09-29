<?php

class Category extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = array('category_name');
	protected $table = 'category';

	public function book()
	{
		return $this->hasMany('Book');
	}
}