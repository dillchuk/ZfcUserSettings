<?php

chdir(__DIR__);

$loader = null;
foreach (['../', '../../../../'] as $dir) {
    $file = "{$dir}vendor/autoload.php";
    if (!file_exists($file)) {
        continue;
    }
    $loader = include $file;
    break;
}
if (!$loader) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

$loader->add('Eye4web\ZfcUserSettingsTest', __DIR__);
