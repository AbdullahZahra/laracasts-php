<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';  
}

function isAllowed($age)
{
    return $age >= 18;
}