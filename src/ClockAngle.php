<?php
    class ClockAngle {

        function angle($hours, $minutes) {
            $hoursOriginAngle = $hours * 30 + ($minutes * .5);
            $minutesOriginAngle = $minutes * 6;

            if (abs($hoursOriginAngle - $minutesOriginAngle) > 180) {
                return 360 - abs($hoursOriginAngle - $minutesOriginAngle);
            }
            return abs($hoursOriginAngle - $minutesOriginAngle);
        }

    }

 ?>
