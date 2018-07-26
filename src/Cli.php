<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const COUNT_QUESTIONS = 3;

function playGame($description, $getGameData)
{
    line('Welcome to the Brain Games!');
    line($description . PHP_EOL);
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);

    for ($i = 0; $i < COUNT_QUESTIONS; $i++) {
        ["question" => $question, "rightAnswer" => $rightAnswer] = $getGameData();
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($rightAnswer === $userAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $rightAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }
    line("Congratulations, %s!", $userName);
    return;
}
