<?php

use Bonnyprints\EmarsysCountries\EmarsysCountryHelper;
use PHPUnit\Framework\TestCase;

class EmarsysCountryHelperTest extends TestCase
{
    /**
     * @dataProvider isoCode2DataProvider
     */
    public function testGetCountryIdByIsoCode2($countryCode, $emarsysValue)
    {
        $this->assertEquals($emarsysValue, EmarsysCountryHelper::getCountryIdByIsoCode2($countryCode));
    }

    public function isoCode2DataProvider()
    {
        return [
            ['de', 65],
            ['DE', 65],
            ['FR', 61],
            ['JP', 85]
        ];
    }

    /**
     * @dataProvider invalidIso2DataProvider
     * @param $invalidInput
     */
    public function testFailGetCountryIdByIsoCode2WithInvalidInput($invalidInput)
    {
        $this->expectException(\UnexpectedValueException::class);
        EmarsysCountryHelper::getCountryIdByIsoCode2($invalidInput);
    }

    public function invalidIso2DataProvider()
    {
        return [
            [''],
            [null],
            ['QQ'],
            ['DEU'],
            ['d'],
            [65],
        ];
    }

    /**
     * @dataProvider isoCode3DataProvider
     */
    public function testGetCountryIdByIsoCode3($countryCode, $emarsysValue)
    {
        $this->assertEquals($emarsysValue, EmarsysCountryHelper::getCountryIdByIsoCode3($countryCode));
    }

    public function isoCode3DataProvider()
    {
        return [
            ['deu', 65],
            ['DEU', 65],
            ['FRA', 61],
            ['JPN', 85]
        ];
    }

    /**
     * @dataProvider invalidIso3DataProvider
     * @param $invalidInput
     */
    public function testFailGetCountryIdByIsoCode3WithInvalidInput($invalidInput)
    {
        $this->expectException(\UnexpectedValueException::class);
        EmarsysCountryHelper::getCountryIdByIsoCode3($invalidInput);
    }

    public function invalidIso3DataProvider()
    {
        return [
            [''],
            [null],
            ['QQQ'],
            ['DEUT'],
            ['d'],
            [65]
        ];
    }

    /**
     * @dataProvider isoCodeNumDataProvider
     */
    public function testGetCountryIdByIsoCodeNum($countryCode, $emarsysValue)
    {
        $this->assertEquals($emarsysValue, EmarsysCountryHelper::getCountryIdByNumericIsoCode($countryCode));
    }

    public function isoCodeNumDataProvider()
    {
        return [
            [276, 65],
            ['276', 65],
            [250, 61],
            [392, 85]
        ];
    }

    /**
     * @dataProvider invalidIso3DataProvider
     * @param $invalidInput
     */
    public function testFailGetCountryIdByIsoCodeNumWithInvalidInput($invalidInput)
    {
        $this->expectException(\UnexpectedValueException::class);
        EmarsysCountryHelper::getCountryIdByNumericIsoCode($invalidInput);
    }

    public function invalidIsoNumDataProvider()
    {
        return [
            [''],
            [null],
            ['DEUT'],
            ['d'],
            [9999]
        ];
    }
}
