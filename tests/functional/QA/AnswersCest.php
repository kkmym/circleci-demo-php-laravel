<?php

use App\Models\QA\Question;

/**
 * Q&A 回答
 */

class AnswersCest
{
    protected $questionAttributes;
    protected $questionId;

    public function _before()
    {
        $this->questionAttributes = [
            'title' => 'テスト用の質問',
            'description' => 'これはテスト用の質問です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];

        $question = Question::create($this->questionAttributes);
        $this->questionId = $question->question_id;
    }

    public function createAnswer(FunctionalTester $I)
    {
        $I->amOnPage('/q-and-a/questions/' . $this->questionId . '/answers/create');
        $I->see('回答フォーム');
    }

}
