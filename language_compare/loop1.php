<?php

$start = microtime(true);

for($i = 0, $j = 0; $i < 1000000000; $i++){
    $j += $i;
}

echo "Count reached {$j} \n";

$time_elapsed_secs = microtime(true) - $start;
echo "Time taken by program in PHP is: $time_elapsed_secs seconds\n";

// rig: Dell PowerEdge T110-II (3.1 GHz/core x4 - 4GB Ram) / php8.1-fpm
// Time taken by program in PHP is: 6.8863270282745 seconds