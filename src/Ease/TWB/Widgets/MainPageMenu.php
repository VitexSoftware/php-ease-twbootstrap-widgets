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

class MainPageMenu extends \Ease\Html\DivTag
{
    /**
     * Sem se přidávají položky.
     */
    public \Ease\Html\DivTag $row = null;

    /**
     * Rámeček nabídky.
     */
    public \Ease\Html\DivTag $well = null;

    public function __construct()
    {
        parent::__construct(
            null,
            null,
            [
                'class' => 'container',
                'style' => 'margin: auto;',
            ],
        );
        $this->well = new \Ease\TWB\Well();
        $this->row = new \Ease\TWB\Row();
    }

    /**
     * Add Item to mainpage Menu.
     *
     * @param string $image url
     * @param string $title caption
     * @param string $url   image link href url
     *
     * @return \Ease\Html\ATag
     */ public function addMenuItem($image, $title, $url)
    {
        return $this->row->addItem(
            new \Ease\Html\ATag(
                $url,
                new \Ease\TWB\Col(
                    2,
                    "{$title}<center><img class=\"img-responsive\" src=\"{$image}\" alt=\"{$title}\"></center>",
                ),
            ),
        );
    }

    /**
     * Assembly widget.
     */
    public function finalize(): void
    {
        $this->well->addItem($this->row);
        $this->addItem($this->well);
        parent::finalize();
    }
}
