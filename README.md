![EasePHP Framework Logo](https://raw.githubusercontent.com/VitexSoftware/Ease-PHP-Bricks/master/project-logo.png "Project Logo")

EasePHP Bricks
=================

Object oriented PHP Framework for easy&fast writing small/middle sized apps.

[![Source Code](http://img.shields.io/badge/source-VitexSoftware/Ease-PHP-Bricks-blue.svg?style=flat-square)](https://github.com/VitexSoftware/Ease-PHP-Bricks)
[![Latest Version](https://img.shields.io/github/release/VitexSoftware/Ease-PHP-Bricks.svg?style=flat-square)](https://github.com/VitexSoftware/Ease-PHP-Bricks/releases)
[![Software License](https://img.shields.io/badge/license-GPL-brightgreen.svg?style=flat-square)](https://github.com/VitexSoftware/Ease-PHP-Bricks/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/VitexSoftware/Ease-PHP-Bricks/master.svg?style=flat-square)](https://travis-ci.org/VitexSoftware/Ease-PHP-Bricks)
[![Total Downloads](https://img.shields.io/packagist/dt/vitexsoftware/ease-php-bricks.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/ease-php-bricks)
[![Docker pulls](https://img.shields.io/docker/pulls/vitexsoftware/ease-php-bricks.svg)](https://hub.docker.com/r/vitexsoftware/ease-php-bricks/)
[![Downloads](https://img.shields.io/packagist/dt/vitexsoftware/ease-php-bricks.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/ease-php-bricks)
[![Latest stable](https://img.shields.io/packagist/v/vitexsoftware/ease-php-bricks.svg?style=flat-square)](https://packagist.org/packages/vitexsoftware/ease-php-bricks)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4900ce8c-8619-4007-b2d6-0ac830064963/big.png)](https://insight.sensiolabs.com/projects/4900ce8c-8619-4007-b2d6-0ac830064963)


---

Installation
------------

To get Docker image:

    docker pull vitexsoftware/ease-bricks

For Debian, Ubuntu & friends please use repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    aptitude update
    aptitude install ease-bricks

In this case please add this to your app composer.json:

    "require": {
        "ease-bricks": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/Ease",
            "options": {
                "symlink": true
            }
        }
    ]



Composer:
---------

    composer require vitexsoftware/ease-bricks

Links
=====

Homepage: https://www.vitexsoftware.cz/ease.php

GitHub: https://github.com/VitexSoftware/Ease-PHP-Bricks

Apigen Docs: https://www.vitexsoftware.cz/ease-php-bricks/
