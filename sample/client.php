<?php

include_once('../vendor/autoload.php');

$client = new \Snide\Scrutinizer\Client();
die(print_r($client->fetchRepository(new \Snide\Scrutinizer\Model\Repository('pdenis/memetor'))));