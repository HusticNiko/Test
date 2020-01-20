<?php
/**
 * Created by PhpStorm.
 * User: nikoh
 * Date: 11/6/2019
 * Time: 4:24 PM
 */

class LoginCest
{
public function tryLogin(FunctionalTester $I)
{

        $I->amOnPage('/Evidence_Izposojenega_Gradiva/Prijava.php');
        $I->fillField('Upo-ime', 'Huso12');
        $I->fillField('Geslo', 'polskava');
        $I->click('submit');
        $I->see('Prijava uspešna!');
        // $I->seeEmailIsSent(); // only for Symfony
}
}


