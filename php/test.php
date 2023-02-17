<?php

# some points about strings

//heredoc
$x = <<< text
this 
is x
string
text;


//nowdoc
$y = <<< 'text'
this 
is y
string
text;

echo nl2br($x);
echo nl2br($y);


