<?php

declare(strict_types=1);

/**
 * This file is part of the Ease TWBootstrap4 Widgets package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$I = new AcceptanceTester($scenario);
$I->wantTo('Boolean LED widget functionality');
$I->amOnPage('/VitexSoftware/EasePHPbricks/Examples/semaforlight.php');
$I->seeElement('svg');
$I->dontSee('( ! )');
