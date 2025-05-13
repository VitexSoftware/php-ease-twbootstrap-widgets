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

class TWBTreeView extends \Ease\Html\DivTag
{
    /**
     * Properties holder.
     */
    public array $properties = [];

    /**
     * Twitter Bootstrap switch.
     *
     * @param string $name       tag name
     * @param array  $properties tag parameters
     */
    public function __construct($name, $properties = null)
    {
        parent::__construct(null, ['id' => $name]);
        $this->properties = $properties;
    }

    /**
     * Include requied assets in page.
     */
    public function finalize(): void
    {
        \Ease\TWB\Part::twBootstrapize();
        $this->includeJavascript('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js');
        $this->includeCss('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css');
        $this->addJavascript(
            '$(\'#'.$this->getTagID().'\').treeview({'.\Ease\TWB\Part::partPropertiesToString($this->properties).'})',
            null,
            true,
        );
        parent::finalize();
    }
}
