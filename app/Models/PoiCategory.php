<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoiCategory extends Model{

	protected $table = 'categories';

	public function pois()
	{
		return $this->hasMany('POI','category_id');
	}

}