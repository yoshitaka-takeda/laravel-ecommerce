<?php

class Category extends Eloquent {
	
	protected $fillable = array('name');

	public static $rules = array('name'=>'required|min:3');

	public function Products() {
		return $this->hasMany('Product');
	}
}