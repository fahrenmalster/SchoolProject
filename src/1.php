<?php
function getRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

echo getRandomNumber(1, 10);
?>