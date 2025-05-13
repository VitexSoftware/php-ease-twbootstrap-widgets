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
$I->wantTo('MainPageMenu');
$I->amOnPage('/VitexSoftware/EasePHPbricks/Examples/mainpagemenu.php');
$I->seeElement('img[src="https://www.vitexsoftware.cz/img/ease-framework-logo.png"]');
$I->seeElement('img[src="https://www.vitexsoftware.cz/img/icinga_editor-logo.png"]');
$I->dontSee('( ! )');
