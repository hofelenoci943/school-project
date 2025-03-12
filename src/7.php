
<?php
// Create an array of 10 integers between 1 and 100
$numbers = array();
for ($i = 0; $i < 10; $i++) {
    $numbers[] = mt_rand(1, 100);
}

// Shuffle the array to randomize the order of the numbers
shuffle($numbers);

// Display the first element of the array (the largest number)
echo "The largest number is: " . $numbers[0];
?>