<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$userInput = (int)readline("Enter the value to search for: ");

echo in_array($userInput, $numbers) ? "The number you entered {$userInput} is in the array." : "The number you entered {$userInput} is not in the array.";
