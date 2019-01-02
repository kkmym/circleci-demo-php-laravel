<?php namespace App\Http\Controllers\QA;

use App\Http\Controllers\Controller;
use App\Http\Requests\QA\QuestionStoreRequest;
use App\Models\QA\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
	public function __construct()
	{
    }
    
    public function create()
    {
		return view('q-and-a.questions.create');
    }

    public function store(QuestionStoreRequest $request)
    {
        $new = Question::create($request->all());
        $redirectUrl = '/q-and-a/questions/' . $new->question_id;
        return redirect($redirectUrl);
    }

    public function show($question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('q-and-a.questions.show', compact('question'));
    }
}
