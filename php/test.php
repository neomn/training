<?php

# strict and type hint mode

declare(strict_types=1); // this will disable automatic type casting in php

function sum(int $x, int $y){
    echo $x+$y;
}

sum('4.4',3);