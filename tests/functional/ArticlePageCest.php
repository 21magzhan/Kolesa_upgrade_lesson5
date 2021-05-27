<?php

class ArticlePageCest
{
    // tests
    public function checkArticlePageThroughTheList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#navbar-links > li:nth-child(2) > a');
        $I->click('#navbar-links > li:nth-child(2) > a');
        $I->seeElement('#post_558434 > article > h2 > a');

        codecept_debug($I->grabTextFrom('#navbar-links > li:nth-child(2) > a'));
        
        $I->click('#post_558434 > article > h2 > a');
        $I->seeElement('body > div.layout > div.layout__row.layout__row_body > div > div.column-wrapper.js-sticky-wrapper > div.content_left.js-content_left > div');
    }
}
