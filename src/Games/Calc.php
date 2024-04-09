<?php

namespace Brain\Games\Calc;

use function Brain\Engine\play;

const GAME_DEF = 'What is the result of the expression?';
const MIN_VALUE = 1;
const MAX_VALUE = 99;

function calculate(int $num1, int $num2, string $operator): int
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            return 0;
    }
}

function run(): void
{
    $logic = function (): array {
        $num1 = rand(MIN_VALUE, MAX_VALUE);
        $num2 = rand(MIN_VALUE, MAX_VALUE);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = calculate($num1, $num2, $operator);

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
