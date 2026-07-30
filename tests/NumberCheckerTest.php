<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public function testNumberIsEven(): void
    {
        $checker = new NumberChecker(4);
        $result = $checker->isEven();

        $this->assertTrue($result);
    }

    public function testNumberIsNotEven(): void
    {
        $checker = new NumberChecker(9);
        $result = $checker->isEven();
        $this->assertFalse($result);
    }

    public function testNumberIsPositive(): void
    {
        $checker = new NumberChecker(2);
        $result = $checker->isPositive();
        $this->assertTrue($result);
    }

    public function testNumberIsNotPositive(): void
    {
        $checker = new NumberChecker(-9);
        $result = $checker->isPositive();
        $this->assertFalse($result);
    }

}