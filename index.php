<?php

$data = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

function bubbleSort($data)
{
    $dataLength = count($data);
    for ($i = 0; $i < $dataLength; $i++) {
        for ($j = 0; $j < $dataLength - $i - 1; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                $temp = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $temp;
            }
        }
    }
    return $data;
}

var_dump(bubbleSort($data));
