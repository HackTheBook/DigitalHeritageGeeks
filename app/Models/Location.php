<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model{


	public function pois()
	{
		return $this->hasMany('POI');
	}

	public function pages()
	{
		return $this->belongsToMany('Page','pages_locations','location_id','page_id');
	}

	public function meta()
	{
		$meta = [
			'title' => $this->title,
			'description' => "#Flaneur@FokionosNegri Location",
			'og:title' =>$this->title," #Flaneur@FokionosNegri",
			'og:description' => $this->title," #Flaneur@FokionosNegri",
			'og:type' => 'place',
			'place:location:latitude' => $this->lat,
			'place:location:longitude' => $this->lng,
		];
		return $meta;
	}
}