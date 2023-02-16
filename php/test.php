<?php

#deferrence between const and define
const NEO = 'good';

// we can define constants dynamically using define method
if (true){
    define('STATUS','learning');
}
echo NEO;
echo STATUS;
