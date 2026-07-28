<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/exercici2.php';

class SpeedSensorTest extends TestCase
{
    public function testSpeedLowerThan30IsVerySlow(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(29);

        $this->assertSame("too slow", $result);
    }

    public function testSpeed30IsAdequate(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(30);

        $this->assertSame("appropriate speed", $result);
    }

    public function testSpeed60IsAdequate(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(60);

        $this->assertSame("appropriate speed", $result);
    }

    public function testSpeed61IsSlightExcess(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(61);

        $this->assertSame("slight excess", $result);
    }

    public function testSpeed80IsSlightExcess(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(80);

        $this->assertSame("slight excess", $result);
    }

    public function testSpeed81IsModerateExcess(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(81);

        $this->assertSame("moderate excess", $result);
    }

    public function testSpeed100IsModerateExcess(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(100);

        $this->assertSame("moderate excess", $result);
    }

    public function testSpeedHigherThan100IsSeriousExcess(): void
    {
        $sensor = new SpeedSensor();

        $result = $sensor->getSpeedLevel(101);

        $this->assertSame("serious excess", $result);
    }
}