<?php

$start = microtime(true);

for($i=0, $j=0; $i<900000000; $i++){ // 900000000
    $j += $i;
}

echo "count reached {$j} \n"; // count reached 404999999550000000

$time_elapsed_secs = microtime(true) - $start;
echo "$time_elapsed_secs seconds"; // 6.2228329181671 seconds

// rig: Dell PowerEdge T110-II (3.1 GHz/core x4) / php8.1-fpm