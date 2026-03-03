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
 * Description of PasswordInput.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class PasswordInput extends \Ease\Html\DivTag
{
    /**
     * Password input.
     *
     * @param string $name       Input name
     * @param string $value      Plaintext password
     * @param array  $properties Poroperties for password input
     */
    public function __construct($name, $value = null, $properties = [])
    {
        $inpass = new \Ease\Html\InputPasswordTag($name, $value);
        $inpass->setTagID();
        $inpass->setTagProperties($properties);
        parent::__construct($inpass, ['class' => 'input-group']);
        $this->addItem(new \Ease\Html\SpanTag(
            null,
            ['id' => $inpass->getTagID().'eye', 'toggle' => '#password-field', 'class' => 'glyphicon glyphicon glyphicon-eye-open'],
        ));
        $this->addJavaScript(<<<'EOD'

$("#
EOD.$inpass->getTagID().<<<'EOD'
eye").click(function() {
  $("#
EOD.$inpass->getTagID().<<<'EOD'
eye").toggleClass("glyphicon-eye-open glyphicon-eye-close");
  var input = $("#
EOD.$inpass->getTagID().<<<'EOD'
");
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

EOD);
    }
}
