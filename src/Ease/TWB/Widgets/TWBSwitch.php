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

class TWBSwitch extends \Ease\Html\CheckboxTag
{
    /**
     * Properties holder.
     */
    public array $properties = [];

    /**
     * Twitter Bootstrap switch.
     *
     * @param string $name       tag name
     * @param bool   $checked    checkbox state
     * @param string $value      returned value
     * @param array  $properties tag parameters
     */
    public function __construct(
        $name,
        $checked = false,
        $value = null,
        $properties = null,
    ) {
        parent::__construct($name, $checked, $value, $properties);

        if (!isset($properties['onText'])) {
            $properties['onText'] = _('Yes');
        }

        if (!isset($properties['offText'])) {
            $properties['offText'] = _('No');
        }

        $this->setProperties($properties);
    }

    /**
     * Properties setter.
     *
     * @param array $properties values to change
     */
    public function setProperties($properties): void
    {
        $this->properties = array_merge($this->properties, $properties);
    }

    /**
     * Include requied assets in page.
     */
    public function finalize(): void
    {
        \Ease\TWB\Part::twBootstrapize();
        $this->includeCss('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap2/bootstrap-switch.css');
        $this->includeJavascript('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js');
        $this->addJavascript(
            '$("[name=\''.$this->getTagName().'\']").bootstrapSwitch({'.\Ease\TWB\Part::partPropertiesToString($this->properties).'})',
            null,
            true,
        );
        parent::finalize();
    }
}
