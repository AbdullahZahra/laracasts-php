<?php

require 'functions.php';

if (isAllowed(1))
{
    echo 'You are allowed';
}
else
{
    echo 'You are not allowed';
}