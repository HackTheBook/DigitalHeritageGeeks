<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model{

	public function pois()
	{
		return $this->belongsToMany('POI','feeds_pois','feed_id','poi_id');
	}

	public function pages()
	{
		return $this->belongsToMany('Page','feeds_pages','feed_id','page_id');
	}

	public function iconClass()
	{
		switch ($this->type) {
			case 'youtube':
				return 'fa fa-youtube';
				break;
			case 'twitter':
				return 'fa fa-twitter';
				break;
			case 'europeana':
				return 'europeana-icon';
				break;
			default:
				return 'fa fa-feed';
				break;
		}
	}
}