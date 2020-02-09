<?php

function pre($a)
{
    echo '<pre>';
    var_dump($a);
    echo '</pre>' . PHP_EOL;
}


function pred($a)
{
    pre($a);
    die('На этом всё');
}

function showTitle($a)
{
    echo  "<h1>{$a}<h1/>";
    echo PHP_EOL;
}
function show($a)
{
    
    echo "<p>$a</p>";
    echo PHP_EOL;
}
