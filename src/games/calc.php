<?php

namespace BrainGames\Games\calc;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = "What is the result of the expression?";
const OPERATORS = ['+', '-', '*'];

function run()
{
    $getGameData = function () {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $operator = OPERATORS[rand(0, 2)];

        return array(
            "question" => "{$number1} {$operator} {$number2}",
            "right_answer" => getCalculate($number1, $number2, $operator)
        );
    };
    playGame(DESCRIPTION, $getGameData);
}

function getCalculate($number1, $number2, $operator)
{
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
}
