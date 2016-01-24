<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller {
	
	public function getIndex()
	{
		return view('pages');
	}

	public function getView($num)
	{
		$page = Page::where('num',$num);
		if(empty($p)){
			return view('pages.default');
		}else{
			$meta = $p->meta();
			return view('pages.p'$num,compact('page','meta'));
		}
		return view('details');
	}
}