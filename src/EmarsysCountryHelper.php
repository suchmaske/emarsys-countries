<?php

namespace Bonnyprints\EmarsysCountries;

class EmarsysCountryHelper
{
    public static function getCountryIdByIsoCode2($countryCode)
    {
        if (strlen($countryCode) != 2) {
            throw new \UnexpectedValueException('Your country code is not exactly two characters long.');
        }

        $normalizedCountryCode = strtoupper($countryCode);
        $mapping = EmarsysCountryList::ISO2_MAPPING;

        if (!array_key_exists($normalizedCountryCode, $mapping)) {
            throw new \UnexpectedValueException('You provided an invalid country code.');
        }

        return $mapping[$normalizedCountryCode];
    }

    public static function getCountryIdByIsoCode3($countryCode)
    {
        $normalizedCountryCode = strtoupper($countryCode);

        if (strlen($countryCode) != 3) {
            throw new \UnexpectedValueException('Your country code is not exactly three characters long.');
        }

        $mapping = EmarsysCountryList::ISO3_MAPPING;

        if (!array_key_exists($normalizedCountryCode, $mapping)) {
            throw new \UnexpectedValueException('You provided an invalid country code.');
        }

        return $mapping[$normalizedCountryCode];
    }

    public static function getCountryIdByNumericIsoCode($countryCode)
    {
        if (!is_numeric($countryCode)) {
            throw new \UnexpectedValueException('You did not provide a numeric country id');
        }

        $mapping = EmarsysCountryList::ISO_NUM_MAPPING;

        if (!array_key_exists($countryCode, $mapping)) {
            throw new \UnexpectedValueException('You provided an invalid country code.');
        }

        return $mapping[$countryCode];
    }
}