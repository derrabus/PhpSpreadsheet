<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;
use PHPUnit\Framework\TestCase;

class MRoundTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerMROUND
     *
     * @param mixed $expectedResult
     */
    public function testMROUND($expectedResult, ...$args): void
    {
        $result = MathTrig::MROUND(...$args);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerMROUND()
    {
        return require 'tests/data/Calculation/MathTrig/MROUND.php';
    }
}
