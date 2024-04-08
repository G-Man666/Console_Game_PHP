<?php

namespace Brain\Games\Gcd;

use function Brain\Engine\play;

const GAME_DEF = 'Find the greatest common divisor of given numbers.';
const MIN_VALUE = 1;
const MAX_VALUE = 99;
function gcd(int $num1, int $num2): int
{
    if ($num2 === 0) {
        return $num1;
    }

    return gcd($num2, $num1 % $num2);
}

function run(): void
{
    $logic = function (): array {
        $num1 = rand(MIN_VALUE, MAX_VALUE);
        $num2 = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$num1} {$num2}";
        $correctAnswer = gcd($num1, $num2);

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
