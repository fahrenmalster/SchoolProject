<?php
function getRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

$randomNumber = getRandomNumber(1, 10);
echo "The random number is: $randomNumber";
?>