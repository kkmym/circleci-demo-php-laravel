<?php namespace App\Http\Controllers\QA;

use App\Http\Controllers\Controller;
use App\Models\QA\Question;

class IndexController extends Controller
{
    protected $model;

	/**
	 * @return void
	 */
	public function __construct(Question $model)
	{
        $this->model = $model;
	}

	/**
	 * @return Response
	 */
	public function index()
	{
        $questions = $this->model->getQuestionsWithLatestAnswer();
		return view('q-and-a/index')->with('questions', $questions);
	}
}
