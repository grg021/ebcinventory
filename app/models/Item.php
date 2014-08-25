<?php

class Item extends BaseModel {
	
	protected $table = 'items';
	
	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public static $relationsData = array(
	    'category' => array(self::BELONGS_TO, 'Category')
 	);

	public static $rules = array(
		'name'                  => 'required',
		'code'                 	=> 'required|unique:items',
		'category_id'			=> 'required'
	);
}