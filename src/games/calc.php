<?php

namespace BrainGames\Games\calc;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = "What is the result of the expression?";

function run()
{
    $question = function () {
        $operation = ['+', '-', '*'];
        $operator = $operation[array_rand($operation)];
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        return "{$number1} {$operator} {$number2}";
    };
    $carrectAnswer = function ($question) {
        list($number1, $operator, $number2) = explode(' ', $question);

        switch ($operator) {
            case '+':
                return $number1 + $number2;
                break;
            case '-':
                return $number1 - $number2;
                break;
            case '*':
                return $number1 * $number2;
                break;
        }
    };
    playGame(DESCRIPTION, $question, $carrectAnswer);
}
