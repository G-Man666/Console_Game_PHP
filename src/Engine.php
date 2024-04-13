<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

const GAME_ROUND = 3;

function play(string $gameDef, callable $gameLogicFunc): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameDef);

    for ($correctAnswers = 1; $correctAnswers <= GAME_ROUND; $correctAnswers++) {
        [$question, $correctAnswer] = $gameLogicFunc();

        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer === strval($correctAnswer)) {
            line('Correct!');
            continue;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit(0);
        }
    }

    line("Congratulations, %s!", $name);
}
