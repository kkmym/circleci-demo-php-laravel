<?php namespace App\Http\Controllers\QA;

use App\Http\Controllers\Controller;
use App\Models\QA\Question;
use App\Models\QA\Answer;
use App\Http\Requests\QA\AnswerStoreRequest;

class AnswersController extends Controller
{
	public function __construct()
	{
    }

    public function create($question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('q-and-a.answers.create', ['question' => $question]);
    }

    public function store($question_id, AnswerStoreRequest $request)
    {
        $new = Answer::create($request->all());
        $redirectUrl = '/q-and-a/questions/' . $new->question_id;
        return redirect($redirectUrl);
    }
}
