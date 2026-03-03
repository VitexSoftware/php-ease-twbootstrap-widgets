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
 * Description of GroupChooser.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
trait Selectizer
{
    /**
     * Selectize.js for Ease Input/Select widgets.
     *
     * @param array $settings see https://github.com/selectize/selectize.js/blob/master/docs/api.md
     * @param array $values   [value=>label,value=>label,...]
     */
    public function selectize($settings = [], $values = []): void
    {
        if (empty($this->getTagID())) {
            $this->setTagID();
        }

        if ($values) {
            $settings['options'] = $values;
        }

        $this->addJavaScript(<<<'EOD'

$('#
EOD.$this->getTagID().<<<'EOD'
').selectize({

EOD.\Ease\JQuery\Part::partPropertiesToString($settings).<<<'EOD'

});

EOD);

        $this->includeJavaScript('https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.js');
        $this->includeCss('https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css');
        $this->includeCss('https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css');
    }
}
