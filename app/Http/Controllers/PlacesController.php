<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\POI;
use App\Models\PoiCategory;

class PlacesController extends Controller {
	
	public function getIndex()
	{
		$categories = PoiCategory::all();
		$pois = POI::all();
		return view('places',compact('categories','pois'));
	}

	public function getMap()
	{
		return view('map');
	}

	public function getDetails($id)
	{
		return view('details');
	}
}