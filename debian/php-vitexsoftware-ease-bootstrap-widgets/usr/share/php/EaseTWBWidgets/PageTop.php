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

namespace Ease\TWB\Widgets;

/**
 * Page TOP.
 */
class PageTop extends \Ease\Html\DivTag
{
    /**
     * Page Title.
     */
    public string $pageTitle = 'Page Heading';

    /**
     * Nastavuje titulek.
     *
     * @param string $pageTitle
     */
    public function __construct($pageTitle = null)
    {
        parent::__construct();

        if (null !== $pageTitle) {
            \Ease\Shared::webPage()->setPageTitle($pageTitle);
        }
    }

    /**
     * Vloží vršek stránky a hlavní menu.
     */
    public function finalize(): void
    {
        $this->addItem(new MainMenu());

        if (\get_class(\Ease\Shared::user()) === 'SpojeNet\System\User') {
            $this->addItem(new History());
        }

        parent::finalize();
    }
}
