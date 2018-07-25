<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const COUNT_QUESTIONS = 3;

function playGame($description, $question, $correctAnswer)
{
    line('Welcome to the Brain Games!');
    line($description . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < COUNT_QUESTIONS; $i++) {
        $quest = $question();
        line("Question: %s", $quest);
        $answer = prompt("Your answer", 0);
        $rightAnswer = $correctAnswer($quest);
        if ($rightAnswer == $answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
    return;
}
