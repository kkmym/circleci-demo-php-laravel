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
        $I->fillField('question', "これは質問の内容です（１行目）。\nこれは質問の内容です（２行目）。");

        $I->click('button[type=submit]');
    }

    /**
     * @before createQuestion
     */
    public function storeQuestion(FunctionalTester $I)
    {
        // 試しに書いてみたテスト $I->seeCurrentUrlEquals('/q-and-a/questions');
    }
}
