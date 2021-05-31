<?php


/**
* переделываем косяки с прошлой ДЗ с селекторами XPath & CSS
*/
class SearchingCest
{
/**
 * поиск товара blouse
 */
    public function checkSearchingByText(AcceptanceTester $I)
    {
        $searchFormCSS = '#search_query_top';
        $searchFormXpath = '//input[@id="search_query_top"]';
        $searchFormCSS = '#searchbox > button';
        $searchFormXpath = '//button[@name="submit_search';
        $searchFormCSS = '.icon-eye-open';
        $searchFormXpath = '//a[@class="quick-view-mobile';

        $I->amOnPage('');
        $I->seeElement('//input[@id="search_query_top"]');
        $I->click('//input[@id="search_query_top"]');
        $I->seeElement('//input[@id="search_query_top"]');
        $I->fillField('//input[@id="search_query_top"]', 'blouse');
        $I->pressKey('//button[@name="submit_search"]', \Facebook\Webdriver\WebDriverKeys::ENTER);
        $I->seeElement('//a[@class="quick-view-mobile"]');
        $I->click('//a[@class="quick-view-mobile"]');
        $I->wait(20);
    }
}
