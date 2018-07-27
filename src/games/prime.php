<?php

namespace BrainGames\Games\prime;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = 'Answer "yes" if number prime otherwise answer "no".';

function run()
{
    $getGameData = function () {
        $question = rand(0, 100);
        $answer = isPrime($question) ? "yes" : "no";

        return array(
            "question" => (string) $question,
            "rightAnswer" => (string) $answer
        );
    };
    playGame(DESCRIPTION, $getGameData);
}

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($divisor = 2; $divisor <= $number / 2; $divisor++) {
        if ($number % $divisor == 0) {
            return false;
        }
    }
    return true;
}
