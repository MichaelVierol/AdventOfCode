<?php

$filename = "InputDay2.txt";
$inputStr = explode("\n", file_get_contents($filename));

$test = "Game 1: 3 blue, 4 red; 1 red, 2 green, 6 blue; 2 green
Game 2: 1 blue, 2 green; 3 green, 4 blue, 1 red; 1 green, 1 blue 
Game 3: 8 green, 6 blue, 20 red; 5 blue, 4 red, 13 green; 5 green, 1 red 
Game 4: 1 green, 3 red, 6 blue; 3 green, 6 red; 3 green, 15 blue, 14 red 
Game 5: 6 red, 1 blue, 3 green; 2 blue, 1 red, 2 green";

$input = explode("\n", $test);

print_r($input);
$blue = 14;
$green = 13;
$red = 12;
$newValue = [];


function getGameId($inputStr)
{
    $allIds = [];
    foreach ($inputStr as $value)
    {
        $game = explode(":", $value);
        $gameId = $game[0];
        $allIds = $gameId;
    }

    return $allIds;
}

foreach ($inputStr as $value)
{
    $newStr = array_map('trim', explode(':', $value));
    $seperate = array_map('trim', explode(';', $newStr[1]));
    foreach ($seperate as $value)
    {
        $test = array_map(',', explode(':', $value));
    }
}

print_r(getGameId($inputStr));


