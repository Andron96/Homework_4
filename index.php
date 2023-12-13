<?php
declare(strict_types=1);

function foo(int $a, int $b, closure $c = NULL): float
{
    if (is_null($c)) {
        return $a * $b;
    }
    $c($a * $b);
    return $a * $b;
}

//$a = 4;
//$b = 5;
$a = (int) readline("Введите первое число: ");
$b = (int) readline("Введите второе число: ");
$showDecision = (int) readline("Введите \"1\", что бы показать результат вычисления и \"0\", что бы нет: ");
if ($showDecision ==)
//$result = foo($a, $b, function ($arg) {
//    echo "Результат умножения: $arg";
//});
//$result = foo($a, $b);
echo $result;