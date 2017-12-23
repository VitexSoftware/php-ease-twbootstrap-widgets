<?php
/**
 * EasePHPbricks - TwitterBootstrap Switch
 *
 * 
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2016 Vitex Software
 */
include '../vendor/autoload.php';

$oPage = new \Ease\TWB\WebPage('Boolean Led - EasePHP Bricks ');

$oPage->addItem(new \Ease\ui\BooleanLED(true, 'green'));
$oPage->addItem(new \Ease\ui\BooleanLED(false, 'green'));
$oPage->addItem(new \Ease\ui\BooleanLED(true, '#EF1919'));
$oPage->addItem(new \Ease\ui\BooleanLED(false, '#EF1919'));

$oPage->draw();
