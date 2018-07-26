<?php

namespace BrainGames\Games\progression;

use function \BrainGames\Cli\playGame;

const DESCRIPTION = 'What number is missing in this progression?';
const LENGHT_PROGRESSION = 10;

function run()
{
    $getGameData = function () {
        $startNumber = rand(0, 10);
        $step = rand(0, 10);
        $endNumber = $step * (LENGHT_PROGRESSION - 1) + $startNumber;

        $progression = range($startNumber, $endNumber, $step);

        $hiddenElementIndex = rand(0, LENGHT_PROGRESSION - 1);
        $hiddenElement = $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = '..';

        return array(
            "question" => implode(' ', $progression),
            "rightAnswer" => (string) $hiddenElement
        );
    };
    playGame(DESCRIPTION, $getGameData);
}
