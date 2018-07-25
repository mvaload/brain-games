<?php

namespace BrainGames\Games\gcd;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function run()
{
    $getGameData = function () {
        $number1 = rand(0, 20);
        $number2 = rand(0, 20);

        return array(
            "question" => "{$number1} {$number2}",
            "right_answer" => getGCD($number1, $number2)

        );
    };
    playGame(DESCRIPTION, $getGameData);
}

function getGCD($number1, $number2)
{
    $remainder = $number1 > $number2 ? $number1 % $number2 : $number2 % $number1;
    if ($remainder == 0) {
        return $number2;
    }
    return getGCD($number2, $remainder);
}