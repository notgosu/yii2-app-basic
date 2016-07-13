<?php

/**
 * Class ContactCest
 */
class ContactCest
{
    public function _before(\AcceptanceTester $I)
    {
        $I->amOnPage('site/contact');
    }
    
    public function openContactPage(AcceptanceTester $I)
    {
        $I->wantTo('ensure that contact page works');
        $I->see('Contact', 'h1');
    }
    
    public function submitEmptyContactForm(AcceptanceTester $I)
    {
        $I->wantTo('submit contact form with no data');
        $I->click('contact-button');

        $I->expectTo('see validations errors');
        $I->see('Contact', 'h1');
        $I->see('Name cannot be blank', '.help-block-error');
        $I->see('Email cannot be blank', '.help-block-error');
        $I->see('Subject cannot be blank', '.help-block-error');
        $I->see('Body cannot be blank', '.help-block-error');
        $I->see('The verification code is incorrect', '.help-block-error');
    }
}
