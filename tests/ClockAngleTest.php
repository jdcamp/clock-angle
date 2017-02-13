<?php
require_once "src/ClockAngle.php";

class ClockAngleTest extends PHPUnit_Framework_TestCase
{
    function test_checkClockAngle_false()
    {
        $test_ClockAngle = new ClockAngle;
        $inputHours = 11;
        $inputMinutes = 59;

        $result = $test_ClockAngle->angle($inputHours, $inputMinutes);

        $this->assertEquals(180, $result);
    }
}


?>
