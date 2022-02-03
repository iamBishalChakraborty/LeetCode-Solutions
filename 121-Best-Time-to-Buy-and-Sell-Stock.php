<?php

function maxProfit($prices)
{
    if (count($prices) > 1) {
        $values = [];
        $small = -1;
        foreach ($prices as $price) {
            if ($small == -1) {
                $small = $price;
            }
            if ($price > $small) {
                $values[] = $price - $small;
            } else if ($small > $price) {
                $small = $price;
            }
        }
        if (count($values) < 1)
            return 0;
        else
            return max($values);
    } else {
        return 0;
    }
}




$prices = [2, 1, 3, 0, 4,0, 2, 3];
//$prices = [2, 7, 1, 4];
//$prices = [7,6,4,3,1];
echo maxProfit($prices);


