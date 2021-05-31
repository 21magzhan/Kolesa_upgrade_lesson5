<?php

class SearchCest
{
    /*
    * проверить поиск по тексту / количеству найденных элементов
    */
    public function checkSearchByText(AcceptanceTester $I)
    {
        $searchFormCSS = '#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img';
        $searchFormXpath = '//*[@id="homefeatured"]/li[2]/div/div[1]/div/div[1]/a';
        $searchFormCSS = '#homefeatured > li:nth-child(2) > div > div.left-block > div > div.quick-view-wrapper-mobile > a > i';
        $searchFormXpath = '//*[@id="homefeatured"]/li[2]/div/div[1]/div/div[1]/a/i';

       $I->amOnPage('');
       $I->seeElement('//ul[@id="homefeatured"]/li[1]/following-sibling::li[1]');
       $I->seeElement('//*[@id="homefeatured"]/li[2]/div/div[1]/div/div[1]/a/i');
       $I->click('//*[@id="homefeatured"]/li[2]/div/div[1]/div/div[1]/a/i');
       $I->seeNumberOfElements('//a[@title="Blouse"]', 2);
       $I->wait(20);
    //    $I->fillField('#search-form-field', 'codeception');
    //    $I->pressKey('#search-form-field', \Facebook\Webdriver\WebDriverKeys::ENTER);
    //    $I->seeNumberOfElements('article', 20);
    }
}
