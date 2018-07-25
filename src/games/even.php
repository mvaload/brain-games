<?php

namespace BrainGames\Games\even;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{   
    $getGameData = function () {
        $question = rand(1, 20);
        $answer = isEven($question) ? "yes" : "no";

        return array(
            "question" => $question,
            "right_answer" => $answer
        );
    };
    
    playGame(DESCRIPTION, $getGameData);
}

function isEven($number)
{
    return $number % 2 == 0;
}
