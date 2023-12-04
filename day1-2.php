<?php

$filename = "InputDay1.txt";
$inputStr = explode("\n", file_get_contents($filename));
$digitMap = [
    'zero' => '0',
    'one' => '1',
    'two' => '2',
    'three' => '3',
    'four' => '4',
    'five' => '5',
    'six' => '6',
    'seven' => '7',
    'eight' => '8',
    'nine' => '9',
];
$filtered = [];
$result = [];

foreach($inputStr as $input)
{
    
}

foreach($filtered as $firstAndLastDigit)
{
    $firstDigit = $firstAndLastDigit[0];
    $lastDigit = substr($firstAndLastDigit, -1);
    $result[] = $firstDigit . $lastDigit;
}

print_r(array_sum($result));
print_r($filtered);