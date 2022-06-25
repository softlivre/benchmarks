<?php

class Worker
{
    public function run(){
        for($a = 0, $b = 0; $a < pow(2,15); $a++){    
            $b += $a;
        }
        return $b;
    }
}
