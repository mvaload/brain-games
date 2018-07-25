<?php

namespace BrainGames\Games\even;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $question = function () {
        return rand(1, 20);
    };

    $correctAnswer = function ($number) {
        return isEven($number) ? "yes" : "no";
    };

    playGame(DESCRIPTION, $question, $correctAnswer);
}

function isEven($number)
{
    return $number % 2 == 0;
}