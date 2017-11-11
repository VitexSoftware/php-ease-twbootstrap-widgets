<?php
include '../vendor/autoload.php';
$oPage = new \Ease\TWB\WebPage('EasePHP Bricks');


$oPage->addItem(new Ease\ui\TWBSwitch('swname', true, 1,
        ['onText' => 'YES', 'offText' => 'NO']));

$oPage->draw();
