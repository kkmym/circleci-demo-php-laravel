<?php
namespace App\Http\Requests\QA;

use Illuminate\Foundation\Http\FormRequest;

class AnswerStoreRequest extends FormRequest
{
    public function all()
    {
        $params = \Input::all();
        $params['question_id'] = $this->route('question_id');
        return $params;
    }

	public function rules()
	{
		return [
			'question_id' => 'required',
			'answer' => 'required|max:10000'
		];
	}

	public function authorize()
	{
		return true;
	}

}
