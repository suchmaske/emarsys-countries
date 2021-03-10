# Emarsys Country Helper

## Description

A small library to map country [ISO-3166-1](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes) country IDs to their respective [Emarsys IDs](https://help.emarsys.com/hc/en-us/articles/115004634749-single-choice-fields-and-their-values).

## Installation

```
composer require suchmaske/emarsys-countries
```

## Run Tests

### Directly 


```
composer install
vendor/bin/phpunit tests
```

### Docker

```
make init
make test
```

## Usage

```php
use Suchmaske\EmarsysCountries\EmarsysCountryHelper;

...

EmarsysCountryHelper::getCountryIdByIsoCode2('DE'); // returns 65
EmarsysCountryHelper::getCountryIdByIsoCode3('DEU'); // returns 65 
EmarsysCountryHelper::getCountryIdByNumericIsoCode(276); // returns 65
```