<?php

require __DIR__ . "/vendor/autoload.php";

function average ($values) {
    return collect($values)->reduce(fn($acc, $value) => ($acc + $value), 0) / count($values);
}

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);