<?php

namespace Brain\Games\Calc;

use function Brain\Engine\play;

const GAME_DEF = 'What is the result of the expression?';
const MIN_VALUE = 1;
const MAX_VALUE = 99;
function run(): void
{
    $logic = function (): array {
        $num1 = rand(MIN_VALUE, MAX_VALUE);
        $num2 = rand(MIN_VALUE, MAX_VALUE);
        $operators = ['+', '-', '*'];
        $operator = array_rand($operators);
        $question = "{$num1} {$operators[$operator]} {$num2}";
        $correctAnswer = 0;

        switch ($operator) {
            case 0:
                $correctAnswer = $num1 + $num2;
                break;
            case 1:
                $correctAnswer = $num1 - $num2;
                break;
            case 2:
                $correctAnswer = $num1 * $num2;
                break;
        }

        return [$question, $correctAnswer];
    };

    play(GAME_DEF, $logic);
}
