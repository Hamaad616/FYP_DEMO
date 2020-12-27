<?php

function currentPrice($price): string
{
    return number_format($price/100 , 2, '.', ',' );
}
