<?php

$sample2Path = "InputDay4.txt";
$inputPath = "InputDay4.txt";

$lines = file($sample2Path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
part1();
part2();

function part1()
{
    global $lines;

    $cards = array_map('parseLine', $lines);
    $accumulativeTotal = array_sum(array_map(function ($card) {
        $count = count(array_intersect($card['winningNumbers'], $card['myNumbers']));
        if ($count > 0) {
            $points = array_reduce(range(0, $count - 1), function ($sum, $i) {
                return $sum + ($i < 2 ? 1 : 2 << ($i - 2));
            }, 0);
            return $points;
        }
        return 0;
    }, $cards));

    echo "Part1: $accumulativeTotal\n";
}

function part2()
{
    global $inputPath;

    $input = file($inputPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $cardCount = array_fill(0, count($input), 1);

    for ($cardId = 0; $cardId < count($input); $cardId++) {
        $line = $input[$cardId];
        $card = parseLine($line);
        $matchCount = count(array_intersect($card['winningNumbers'], $card['myNumbers']));

        for ($i = 0; $i < $matchCount; $i++) {
            $cardCount[$cardId + 1 + $i] += $cardCount[$cardId];
        }
    }

    echo array_sum($cardCount) . "\n";
}

function parseLine($line)
{
    $parts = explode(':', $line);
    $numbers = explode('|', $parts[1]);
    $winningNumbers = extractNumbers($numbers[0]);
    $myNumbers = extractNumbers($numbers[1]);

    return ['winningNumbers' => $winningNumbers, 'myNumbers' => $myNumbers];
}

function extractNumbers($input)
{
    return array_map('intval', preg_split('/\s+/', $input, -1, PREG_SPLIT_NO_EMPTY));
}

?>
