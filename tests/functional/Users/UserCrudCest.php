<?php

class UserCrudCest
{
    public function createUser(FunctionalTester $I)
    {
        $I->amOnPage('/users/create');
        $I->see('Register User');
    }

    public function deleteUser(FunctionalTester $I)
    {

    }
}
