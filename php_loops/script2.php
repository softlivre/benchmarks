<?php

// script 2 trying to use multiple threads

ini_set('max_execution_time', '1000');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$start = microtime(true);
register_shutdown_function('shutdown');

include_once("worker.class.php");
$worker = new Worker();

$final = 0;

for ($i = 0; $i < 10000; $i++){    
    $final += $worker->run();  
}

echo "<hr>final: $final<br>";

/**
 * using jmeter to test this script
 * test plans saved to this directory
 * using 50 threads, 10 loops each
 * dell poweredge t110-II:  (3.1 GHz/core x4)     finished in 3'40" on php8.1-fpm
 *  dell poweredge t420:     (2.4 GHz/core x8)     finished in 3'59" on php8.1-fpm
 *
*/

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
