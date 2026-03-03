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
 * Description of SignInForm.
 *
 * @author vitex
 */
class SignInForm extends \Ease\TWB\Form
{
    public string $userNameField = 'username';

    public string $passwordField = 'password';

    public function __construct(
        $formAction = null,
        $formMethod = 'post',
        $tagProperties = null,
    ) {
        parent::__construct(
            'SignIn',
            $formAction,
            $formMethod,
            null,
            $tagProperties,
        );
        $this->addInput(
            new \Ease\Html\InputTextTag($this->userNameField),
            _('Username'),
            _('Login'),
        );
        $this->addInput(
            new PasswordInput($this->passwordField),
            _('Password'),
            '',
        );
    }

    /**
     * Finally add subnut button.
     */
    public function finalize(): void
    {
        $this->addItem(new \Ease\TWB\SubmitButton(
            _('Sign In'),
            'success',
            ['width' => '100%'],
        ));
        parent::finalize();
    }
}
