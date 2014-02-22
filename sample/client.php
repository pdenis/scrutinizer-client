<?php

include_once('../vendor/autoload.php');

$client = new \Snide\Scrutinizer\Client();
die(print_r($client->fetchRepository('pdenis/memetor')));