<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class POI extends Model{

	protected $table = 'pois';

	public function location()
	{
		return $this->belongsTo('Location');
	}

	public function feeds()
	{
		return $this->belongsToMany('Feed','feeds_pois','poi_id','feed_id');
	}

	public function category()
	{
		return $this->belongsTo('PoiCategory','category_id');
	}
	public function meta()
	{
		$meta = [
			'title' => $this->title,
			'description' => $this->body,
			'og:title' => 'Flaneur @ '.$this->title,
			'og:description' => $this->body,
			'og:image' => $this->thumb,
			'og:type' => 'place',
			'place:location:latitude' => $this->location->lat,
			'place:location:longitude' => $this->location->long,
		];
		return $meta;
	}
}