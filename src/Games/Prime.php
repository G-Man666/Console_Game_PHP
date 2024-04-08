<?php

namespace Brain\Games\Prime;

use function Brain\Engine\play;

const GAME_DEF = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_VALUE = 1;
const MAX_VALUE = 99;

function isPrime(int $num): bool
{
    if ($num === 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if (!(boolval($num % $i))) {
            return false;
        }
    }

        return true;
}

function run(): void
{
    $logic = function (): array {
        $num = rand(MIN_VALUE, MAX_VALUE);
        $question = $num;
        $correctAnswer = (isPrime($num)) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
