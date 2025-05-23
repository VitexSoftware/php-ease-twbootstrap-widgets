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

/**
 * Inherited Methods.
 *
 * @method void                    am($role)
 * @method void                    amGoingTo($argumentation)
 * @method void                    comment($description)
 * @method void                    execute($callable)
 * @method void                    expect($prediction)
 * @method void                    expectTo($prediction)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 * @method void                    lookForwardTo($achieveValue)
 * @method void                    wantTo($text)
 * @method void                    wantToTest($text)
 *
 * @SuppressWarnings(PHPMD)
 */
class UnitTester extends \Codeception\Actor
{
    use _generated\UnitTesterActions;

    /**
     * Define custom actions here.
     */
}
