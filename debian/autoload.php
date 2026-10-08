<?php
/**
 * Debian autoloader for php-vitexsoftware-ease-bootstrap-widgets (Ease\TWB\Widgets\).
 *
 * Static file shipped in the package; nothing is generated at install time.
 */

// Dependencies (composer.json "require": vitexsoftware/ease-twbootstrap)
require_once '/usr/share/php/EaseTWB/autoload.php';

// Narrow prefix: the parent Ease\TWB\ namespace belongs to the base package.
spl_autoload_register(function (string $class): void {
    $prefixes = [
        'Ease\\TWB\\Widgets\\' => '/usr/share/php/EaseTWBWidgets/',
    ];
    foreach ($prefixes as $prefix => $baseDir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }
        $file = $baseDir . str_replace('\\', '/', substr($class, $len)) . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});
