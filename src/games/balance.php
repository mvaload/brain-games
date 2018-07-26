<?php

namespace BrainGames\Games\balance;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = 'Balance the given number.';

function run()
{
    $getGameData = function () {
        $question = rand(0, 1000);

        return array(
            "question" => (string) $question,
            "rightAnswer" => (string) getNumberBalance($question)
        );
    };
    playGame(DESCRIPTION, $getGameData);
}

function getNumberBalance($number)
{
    $arr = str_split(strval($number));
    $sum = array_sum($arr);
    $len = count($arr);
    $rem = $sum % $len;
    $min = ($sum - $rem) / $len;
    for ($i = 0; $i < $len; $i++) {
        $arr[$i] = $min;
    }
    while ($rem > 0) {
        $arr[$len -1] = $min + 1;
        $rem--;
        $len--;
    }
    return join($arr);
}
