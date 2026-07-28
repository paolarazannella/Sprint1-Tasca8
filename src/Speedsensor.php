<?php

class SpeedSensor
{
    public function getSpeedLevel(int $speed): string
    {
        if ($speed < 30) {
            return "too slow";
        } elseif ($speed <= 60) {
            return "appropriate speed";
        } elseif ($speed <= 80) {
            return "slight excess";
        } elseif ($speed <= 100) {
            return "moderate excess";
        } else {
            return "serious excess";
        }
    }
}