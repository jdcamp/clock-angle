<?php
    class ClockAngle {

        function angle($hours, $minutes) {
            $hoursOriginAngle = $hours * 30 + ($minutes * .5);
            $minutesOriginAngle = $minutes * 6;

            if ($hoursOriginAngle < $minutesOriginAngle) {
                return  $minutesOriginAngle - $hoursOriginAngle;
            }
            return $hoursOriginAngle - $minutesOriginAngle;
        }

    }

 ?>
