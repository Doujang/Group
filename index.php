<?php

$loader = require __DIR__.'/vendor/autoload.php';
$loader->setUseIncludePath(true);

$kernal = new \Group\Kernal();
$kernal->init(realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR, $loader);


