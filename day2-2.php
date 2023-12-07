<?php

function isGamePossible($game, $cubeCounts) {
    foreach ($game as $subset) {
        $subsetCounts = explode(', ', $subset);

        foreach ($subsetCounts as $item) {
            list($count, $color) = explode(' ', $item);

            if ((int)$count > $cubeCounts[$color]) {
                return false;
            }
        }
    }

    return true;
}

function sumPossibleGameIds($games, $cubeCounts) {
    $possibleIds = [];

    foreach ($games as $game) {
        list($gameId, $subsets) = explode(": ", $game);

        if (isGamePossible(explode('; ', $subsets), $cubeCounts)) {
            $possibleIds[] = (int)explode(' ', $gameId)[1];
        }
    }

    return array_sum($possibleIds);
}

$gamesInput = file_get_contents("InputDay2.txt");

$games = explode("\n", trim($gamesInput));

$cubeCounts = ['red' => 12, 'green' => 13, 'blue' => 14];

$result = sumPossibleGameIds($games, $cubeCounts);
echo $result . PHP_EOL;

?>
