<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Boolean LED widget functionality');
$I->amOnPage('/VitexSoftware/EasePHPbricks/Examples/booleanled.php');$I->seeElement("svg");
$I->dontSee('( ! )');

