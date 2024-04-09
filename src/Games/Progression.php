<?php

namespace Brain\Games\Progression;

use function Brain\Engine\play;

const GAME_DEF = 'What number is missing in the progression?';

const MIN_VALUE = 1;
const MAX_VALUE = 99;

const LENGTH_MIN_VALUE = 5;
const LENGTH_MAX_VALUE = 10;

const STEP_MIN_VALUE = 2;
const STEP_MAX_VALUE = 10;

function generateProgression(int $length, int $step, int $missingPosition, int $start): array
{
    $result = [];

    for ($i = 0; $i < $length; $i++) {
        $result[] = $start + $i * $step;
    }

    $answer = $result[$missingPosition];
    $result[$missingPosition] = '..';

    return [$result, $answer];
}

function run(): void
{
    $logic = function (): array {
        $length = rand(LENGTH_MIN_VALUE, LENGTH_MAX_VALUE);
        $step = rand(STEP_MIN_VALUE, STEP_MAX_VALUE);
        $missingPosition = rand(0, $length - 1);
        $start = rand(MIN_VALUE, MAX_VALUE);

        list($progression, $answer) = generateProgression($length, $step, $missingPosition, $start);
        $question = implode(' ', $progression);

        return [$question, $answer];
    };

    play(GAME_DEF, $logic);
}
