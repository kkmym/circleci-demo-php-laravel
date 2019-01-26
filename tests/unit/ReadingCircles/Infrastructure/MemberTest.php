<?php

use MyApp\ReadingCircles\Infrastructure\DAOs\Member;

class UserTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testCreate()
    {
        /*
            $table->string('login_id');
            $table->string('name');
            $table->string('display_name');
        */
        $loginId = 'testuser';
        $name = 'テストユーザー';
        $displayName = '表示用のユーザー名';

        Member::create([
            'login_id' => $loginId,
            'name' => $name,
            'display_name' => $displayName,
        ]);

        $this->tester->seeRecord('members', ['login_id' => $loginId]);
    }
}