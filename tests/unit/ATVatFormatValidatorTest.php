<?php

namespace rocketfellows\ATVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class ATVatFormatValidatorTest extends TestCase
{
    /**
     * @var ATVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new ATVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'ATU99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ATU12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ATU00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ATU11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'U99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'U12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'U11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'AT99999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'AU99999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'TU99999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'U123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'U1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATU123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATU1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATU12345678A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATU1234567A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATU123456a',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATU123AA678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATUaaaaaaaa',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ATUaa/aa!aa',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'U12345678A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'U123456A8',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'A12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'U.12345678',
                'isValid' => false,
            ],
        ];
    }
}
