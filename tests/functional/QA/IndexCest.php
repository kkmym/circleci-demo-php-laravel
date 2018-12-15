<?php

/**
 * QA トップページ
 */

class IndexCest
{
    public function indexQA(FunctionalTester $I)
    {
        $I->amOnPage('/q-and-a');
        $I->see('質問＆回答');
    }
}
