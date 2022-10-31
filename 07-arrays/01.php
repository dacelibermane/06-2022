<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

foreach ($numbers as $num) {
    echo $num . PHP_EOL;
}
echo "----------------------------------".PHP_EOL;
sort($numbers, SORT_NUMERIC);
foreach ($numbers as $num){
    echo $num . PHP_EOL;
}
echo "----------------------------------".PHP_EOL;
$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];


foreach ($words as $word){
    echo $word . PHP_EOL;
}
echo "----------------------------------".PHP_EOL;

sort($words, SORT_STRING);
foreach ($words as $word){
    echo $word . PHP_EOL;
}