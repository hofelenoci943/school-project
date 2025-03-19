<?php
// Get a random number between 1 and 10
$randomNumber = mt_rand(1, 10);

// Check if the number is odd or even
if ($randomNumber % 2 == 0) {
    echo "$randomNumber is even";
} else {
    echo "$randomNumber is odd";
}
?>