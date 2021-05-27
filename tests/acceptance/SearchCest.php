<?php

class SearchCest
{
    /*
    * проверить поиск по тексту и количеству найденных элементов
    */
    public function checkSearchByText(AcceptanceTester $I)
    {
        $searchFormCSS = '#search-form-btn';
        $searchFormXpath = '//button[@id="search-form-btn"]';
        $searchFormCSS = '#search-form-field';
        $searchFormXpath = '//input[@class="search-form__field"]';

       $I->amOnPage('');
       $I->seeElement('#search-form-btn');
       $I->click('#search-form-btn');
       $I->seeElement('#search-form-field');
       $I->fillField('#search-form-field', 'codeception');
       $I->pressKey('#search-form-field', \Facebook\Webdriver\WebDriverKeys::ENTER);
       $I->seeNumberOfElements('article', 20);
    }
}
