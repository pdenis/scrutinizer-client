<?php

$baseDir = dirname(__DIR__.'/../');
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Snide\\Monitoring', array($baseDir.'/src/', $baseDir.'/tests/'));
$loader->register();
