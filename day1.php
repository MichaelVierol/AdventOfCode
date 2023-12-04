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

print_r(array_sum($result));