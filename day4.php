<?php

$winnerNumbers = [];
$myCard = [];


function getInput()
{
    $content = file_get_contents("InputDay4.txt");
    $input = explode("\n", trim($content));

    return $input;
}

function getWiningNumbersForeachCard()
{
    $content = getInput();
    $result = [];

    foreach ($content as $value) {
        $seperatedCardWithNumbers = array_map("trim", preg_split("/[:|]/", $value));
        $myCard = $seperatedCardWithNumbers[1];
        $winnerNumbers = $seperatedCardWithNumbers[2];
        $result = countMatchingCharacters($myCard, $winnerNumbers);
    }
}

function countMatchingCharacters(string $myCard, string $winnerNumbers)
{
    $number = explode(' ', $myCard);
    $i = 0;
    $result = [];
    foreach ($number as $char) {
        if (str_contains($char, $winnerNumbers !== false)) {

            $i++;
            
            if ($i > 2) {
                $result[] = pow(2, $i);
            } else {
                $result[] = $i;
            }
        }
    }

    return $result;
}

function printResult($result)
{
    echo $result;
}

getWiningNumbersForeachCard();



