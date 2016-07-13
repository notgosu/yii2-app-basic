<?php

/**
 * Class ContactCest
 */
class ContactCest
{
    public function openContactPage(AcceptanceTester $I)
    {
        $I->wantTo('ensure that contact page works');
        $I->amOnPage('site/contact');
        $I->see('Contact', 'h1');
    }
}
