<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
        $I->click('Добавить товар');
        $I->fillField('name', 'пельмене');
        $I->fillField('price', '148');
        $I->fillField('sku', '0202');
        $I->click('Добавить');
        $I->canSee("admin");
        $I->wait(2);
    }
}
