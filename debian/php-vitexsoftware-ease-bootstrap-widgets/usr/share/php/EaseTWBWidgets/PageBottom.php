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

class PageBottom extends \Ease\Html\FooterTag
{
    public function __construct($content = null)
    {
        $composer = '/usr/share/system.spoje.net/composer.json';

        if (!file_exists($composer)) {
            $composer = '../composer.json';

            if (!file_exists($composer)) {
                $composer = '../../composer.json';
            }
        }

        $appInfo = json_decode(file_get_contents($composer));

        parent::__construct($content);
        $this->SetTagID('footer');
        $this->addItem('<hr>');

        $rowFluid1 = new \Ease\TWB\Row();
        $colA = $rowFluid1->addItem(new \Ease\TWB\Col(2));
        $listA1 = $colA->addItem(new \Ease\Html\UlTag(
            _('Intranet'),
            ['style' => 'list-style-type: none'],
        ));
        $listA1->addItemSmart(new \Ease\Html\ATag(
            'https://crm.spoje.net/',
            'Redmine',
        ));

        $colB = $rowFluid1->addItem(new \Ease\TWB\Col(2));
        $listB1 = $colB->addItem(new \Ease\Html\UlTag(
            _('Aplikace'),
            ['style' => 'list-style-type: none'],
        ));
        $listB1->addItemSmart(new \Ease\Html\ATag(
            'https://mail.spoje.net/roundcube/',
            'Webmail',
        ));

        $colC = $rowFluid1->addItem(new \Ease\TWB\Col(2));
        $listC1 = $colC->addItem(new \Ease\Html\UlTag(
            _('Služby'),
            ['style' => 'list-style-type: none'],
        ));
        $listC1->addItemSmart(new \Ease\Html\ATag(
            'http://www.spoje.net/servery/web-mail-hosting/',
            'Webhosting',
        ));
        $listC1->addItemSmart(new \Ease\Html\ATag(
            'http://www.spoje.net/servery/housing/',
            _('Server housing'),
        ));
        $listC1->addItemSmart(new \Ease\Html\ATag(
            'http://www.spoje.net/servery/virtualy/',
            _('Virtuální servery'),
        ));

        $colD = $rowFluid1->addItem(new \Ease\TWB\Col(2));
        $listD1 = $colD->addItem(new \Ease\Html\UlTag(
            _('Dokumentace'),
            ['style' => 'list-style-type: none'],
        ));
        $listD1->addItemSmart(new \Ease\Html\ATag(
            'http://wiki.spoje.net/doku.php',
            'Wiki',
        ));

        $colE = $rowFluid1->addItem(new \Ease\TWB\Col(2));
        $listE1 = $colE->addItem(new \Ease\Html\UlTag(
            _('Spřízněné'),
            ['style' => 'list-style-type: none'],
        ));
        $listE1->addItemSmart(new \Ease\Html\ATag(
            'http://murka.cz',
            _('Murka.cz'),
        ));
        $listE1->addItemSmart(new \Ease\Html\ATag(
            'http://czfree.net',
            _('CZFree.Net'),
        ));

        $colF = $rowFluid1->addItem(new \Ease\TWB\Col(2));
        $listF1 = $colF->addItem(new \Ease\Html\UlTag(
            _('Více'),
            ['style' => 'list-style-type: none'],
        ));
        $listF1->addItemSmart(new \Ease\Html\ATag(
            'http://www.spoje.net/firma/o-nas/',
            _('O nás'),
        ));
        $listF1->addItemSmart(new \Ease\Html\ATag('', _('Cenník prací')));
        $listF1->addItemSmart(new \Ease\Html\ATag(
            'http://www.spoje.net/firma/',
            _('Kontakty'),
        ));

        $this->addItem($rowFluid1);

        $rowFluid2 = new \Ease\TWB\Row();

        $rowFluid2->addItem(new \Ease\TWB\Col(
            12,
            [new \Ease\TWB\Col(8, ''), new \Ease\TWB\Col(
                4,
                _('Version').': '.$appInfo->version.' '._('&copy; 2015-2018 Spoje.Net s.r.o.'),
            )],
        ));

        $this->addItem(new \Ease\TWB\Container($rowFluid2));
    }

    /**
     * Zobrazí přehled právě přihlášených a spodek stránky.
     */
    public function finalize(): void
    {
        if (isset($this->webPage->heroUnit) && !\count($this->webPage->heroUnit->pageParts)) {
            unset($this->webPage->container->pageParts['\Ease\Html\DivTag@heroUnit']);
        }

        $this->includeCss('/javascript/font-awesome/css/font-awesome.min.css');
        parent::finalize();
    }
}
