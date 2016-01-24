<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

	public function location()
	{
		return $this->belongsTo('Location');
	}

	public function days()
	{
		return Dates::converTo($this->date)->diffForHumans();
	}
	public function meta()
	{
		$meta = [
			'title' => $this->title." - Flaneur #3",
			'description' => $this->descr,
			'og:type' => 'website',
			'og:title' => $this->title." - Flaneur #3",
			'og:description' => $this->descr,
			'og:image' => $this->thumb,
			'og:see_also' => $this->link,
		];
		return $meta;
	}
}