<?php

use App\User;

/**
 * Q&A 質問登録
 */

class QuestionsCest
{
    protected $userAttributes;

    public function _before()
    {
        $this->userAttributes = [
            'email' =>  'testuser@example.com',
            'password' => Hash::make('P@s5w0rd'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }

    public function createQuestion(FunctionalTester $I)
    {
        $I->amLoggedAs(User::create($this->userAttributes));

        $I->amOnPage('/q-and-a/questions/create');
        $I->see('質問投稿フォーム');

        $I->fillField('title', '質問のタイトル');
        $I->fillField('description', "これは質問の内容です（１行目）。\nこれは質問の内容です（２行目）。");

        $I->click('button[type=submit]');
    }

    public function storeQuestion(FunctionalTester $I)
    {
        // データをURLに対して直接POSTする

        // 結果として、DBに期待するレコードが存在するかどうかを、チェックする
    }

    /**
     * @before createQuestion
     */
    public function showQuestions(FunctionalTester $I)
    {
        $I->seeCurrentUrlEquals('/q-and-a/questions/1');
        $I->see('質問のタイトル');
    }
}
