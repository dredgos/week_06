<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 100; $i += 1) {
    $answer = "";    
    
    if ($i % 3 === 0) {
        $answer .= "Fizz";
    }
    
    if ($i % 5 === 0) {
        $answer .= "Buzz";
    }

    if ($answer === "") {
        $answer = $i;
    }

    dump($answer);
}
