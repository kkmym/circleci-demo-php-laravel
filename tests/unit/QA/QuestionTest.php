<?php

use App\Models\QA\Question;

class QuestionTest extends \Codeception\TestCase\Test
{
    protected function _createData()
    {
        $data = [
            'title' => 'テストの質問',
            'description' => "この質問は\nテスト用に\n登録したデータです。",
        ];
        Question::create($data);
    }

    public function testSeeRecord()
    {
        $this->_createData();

        $this->tester->seeRecord('questions', ['title' => 'テストの質問']);
        $this->tester->seeRecord('questions', ['question_id' => 1]);
    }

    public function testFind()
    {
        $this->_createData();

        $question = Question::find(1);
        $this->assertEquals($question->title, 'テストの質問');
    }
}
