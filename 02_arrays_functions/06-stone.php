<?php

require __DIR__ . "/vendor/autoload.php";

function stone ($num) {
    return $num / 6.35029318;
};

dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);