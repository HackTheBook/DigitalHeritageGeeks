<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Utilities\Dates;

class Log extends Model{

	public function loggable()
	{
		return $this->morphTo();
	}

	public function updatedAt()
	{
		return Dates::converTo($this->updated_at)->diffForHumans();
	}
}