<?php

namespace Brain\Games\Progression;

use function Brain\Engine\play;

const GAME_DEF = 'What number is missing in the progression?';

function run(): void
{
    $logic = function (): array {
        $length = rand(5, 10);
        $step = rand(2, 10);
        $missingPosition = rand(0, $length - 1);
        $start = rand(1, 99);
        $result = [];

        for ($i = 0; $i < $length; $i++) {
            $result[] = $start + $i * $step;
        }

        $answer = $result[$missingPosition];
        $result[$missingPosition] = '..';
        $question = implode(' ', $result);

        return [$question, $answer];
    };

    play(GAME_DEF, $logic);
}
