scrutinizer-client
==================

PHP Client for Scrutinizer API

[![Latest Stable Version](https://poser.pugx.org/snide/php-scrutinizer-client/v/stable.png)](https://packagist.org/packages/snide/php-scrutinizer-client)
[![Build Status](https://travis-ci.org/pdenis/scrutinizer-client.png)](https://travis-ci.org/pdenis/scrutinizer-client)
[![Code Coverage](https://scrutinizer-ci.com/g/pdenis/scrutinizer-client/badges/coverage.png?s=42ec5b2add715a1a352199ef5a4b5d2fad8f94c7)](https://scrutinizer-ci.com/g/pdenis/scrutinizer-client/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/pdenis/scrutinizer-client/badges/quality-score.png?s=1e78f6c9dc72ab19802410e4b9e84024fc051766)](https://scrutinizer-ci.com/g/pdenis/scrutinizer-client/)
[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/pdenis/scrutinizer-client/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

## Installation

### Installation by Composer

If you use composer, add scrutinizer-client library as a dependency to the composer.json of your application

```php
    "require": {
        ...
        "snide/php-scrutinizer-client": "1.*"
        ...
    },

```

## Usage

To access Scrutinizer API, you can do :

```php
<?php
    // Access github repository pdenis/monitoring
    $client = new Snide\Scrutinizer\Client();
    $repo = $client->fetchRepository('pdenis/monitoring');
```

That's all!