<?php

$filename = "InputDay1.txt";
$inputStr = explode("\n", file_get_contents($filename));
$filtered = [];
$result = [];

foreach($inputStr as $input)
{
    $filtered[] = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
}

foreach($filtered as $firstAndLastDigit)
{
    $firstDigit = $firstAndLastDigit[0];
    $lastDigit = substr($firstAndLastDigit, -1);
    $result[] = $firstDigit . $lastDigit;
}

// print_r(array_sum($result));

/********PART2********/

$filename = "InputDay1.txt";
$inputStr = explode("\n", file_get_contents($filename));
$filtered = [];
$result = [];

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

foreach($inputStr as $input)
{
    $filtered[] = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
}

foreach($filtered as $firstAndLastDigit)
{
    $firstDigit = $firstAndLastDigit[0];
    $lastDigit = substr($firstAndLastDigit, -1);
    $result[] = $firstDigit . $lastDigit;
}

print_r(array_sum($result));