<?php

namespace App\Http\Requests\QA;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStoreRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required',
			'description' => 'required'
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
}