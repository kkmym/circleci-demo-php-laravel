<?php namespace App\Http\Controllers\QA;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

	/**
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * @return Response
	 */
	public function index()
	{
		return view('q-and-a/index');
	}

}
