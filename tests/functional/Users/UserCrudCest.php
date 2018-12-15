<?php

/**
 * ユーザーCRUDテスト
 */

class UserCrudCest
{
    public function createUser(FunctionalTester $I)
    {
        $I->amOnPage('/users/create');
        $I->see('Register User');

        $I->fillField('input[name=email]', 'cest_account@example.com');
        $I->fillField('input[name=password]', 'Passw0rd');

        $I->click('登録');

        $I->seeCurrentRouteIs('users.show');
        $I->see('cest_account@example.com');
    }

    /**
     * @before createUser
     */
    public function indexUsers(FunctionalTester $I)
    {
        $I->amOnPage('/users');
        $I->see('cest_account@example.com');
    }
}
