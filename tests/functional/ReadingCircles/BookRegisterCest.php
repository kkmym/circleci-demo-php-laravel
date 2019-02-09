<?php

class BookRegisterCest
{
    public function testBookRegisterRouting(FunctionalTester $I)
    {
        $I->amOnPage('/reading-circles/books/registration/form');
        $I->click('#registerButton');

        $I->seeCurrentUrlEquals('/reading-circles/books');
        $I->seeResponseCodeIs(200);
    }
}
