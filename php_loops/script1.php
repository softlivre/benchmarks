<?php

// script 1 that seems to use a single core

ini_set('max_execution_time', '1000');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$start = microtime(true);
register_shutdown_function('shutdown');

for($i = 0, $j = 0; $i < pow(2,30); $i++){    
    $j += $i;    
}

echo "count reached {$j}";

// dell poweredge t110-II: (3.1 GHz/core x4)   reached in 7.717 seconds on php8.1-fpm
// dell poweredge t420:    (2.4 GHz/core x8)   reached in 11.02 seconds on php8.1-fpm

function shutdown(){
    $a = error_get_last();
    if ($a == null OR $a['type'] == 8) {
         echo "<br><hr>ended!";
    }
    else {
        echo "error found:<br>";
        echo $_SERVER['SCRIPT_FILENAME'];
        echo "<br>";
        echo $_SERVER['REQUEST_URI'];            
        echo "<br><pre>";
        print_r($a);
        echo "</pre>";
    }
}

$time_elapsed_secs = microtime(true) - $start;
echo "<br><br><hr> reached end in $time_elapsed_secs segundos.<br>";
echo "Used memomy: " . (memory_get_usage() / 1024 / 1024) . " MB";
echo "<br>";
echo "Peak memory usage: " . (memory_get_peak_usage() / 1024 / 1024) . " MB";
echo "<br>";
