<?php
$alice = file_get_contents('alice.txt');
$needles = explode(' ', strtolower($alice));

foreach ($needles as $key => $val) {

    $pattern = ["'", '`',',', '"', '-', ':', ';', '.', '!', '?', ')', '(', '*'];
    $string = str_replace($pattern, '', $val);
    $trimmed = trim($string);
    if(isset($words[$trimmed])) {
        $words[$trimmed]++;
    } else {
        $words[$trimmed] = 1;
    }
}
arsort($words);
function wordCount($array, $limit=-1)
{
    $sliced = array_slice($array, 1, $limit);
    foreach($sliced as $key=>$value) {
        if($key === '') {
            unset($array[$value]);
        } else {
            echo $key . ': ' . $value . "\n";
        }
    }
}
wordCount($words, 5);


