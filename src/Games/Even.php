<?php

namespace Brain\Games\Even;

use function Brain\Engine\play;

const GAME_DEF = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_VALUE = 1;
const MAX_VALUE = 99;
function run(): void
{
    $logic = function (): array {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $correctAnswer = ($question % 2 === 0) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
