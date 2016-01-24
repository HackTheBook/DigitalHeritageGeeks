<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model{

	public function location()
	{
		return $this->belongsToMany('Location','locations_pages');
	}

	public function feeds()
	{
		return $this->belongsToMany('Feed','feeds_pages','page_id','feed_id');
	}

	public function meta()
	{
		$meta = [
			'title' => "p".$this->num." - Flaneur #3",
			'description' => $this->descr,
			'og:type' => 'books.book',
			'og:title' => "p".$this->num." - Flaneur #3",
			'og:description' => $this->descr,
			'og:image' => $this->thumb,
			'og:see_also' => $this->feeds()->lists('url'),
			'books:isbn' => Config::get('flaneur.isbn'),
			'books:initial_release_date' =>  Config::get('flaneur.initial_release_date'),
			'books:release_date' => $this->updated_at
		];
		return $meta;
	}
}