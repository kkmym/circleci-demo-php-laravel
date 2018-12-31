<?php namespace App\Http\Controllers\QA;

use App\Http\Controllers\Controller;
use App\Models\QA\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
	public function __construct()
	{
    }
    
    public function create()
    {
		return view('q-and-a/questions/create');
    }

    public function store(Request $request)
    {
        return 'store';
    }
}
