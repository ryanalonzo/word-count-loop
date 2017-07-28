<?php
$alice = file_get_contents('alice.txt');
$pattern = ["'", '`',',', '"', '-', ':', ';', '.', '!', '?', ')', '(', '*'];
$string = str_replace($pattern, ' ', $alice);
$needles = str_word_count(strtolower($string),1);
foreach ($needles as $key => $val) {
    if(isset($words[$val])) {
        $words[$val]++;
    } else {
        $words[$val] = 1;
    }
}
arsort($words);
function wordCount($array, $limit=-1)
{
    $sliced = array_slice($array, 0, $limit);
    foreach($sliced as $key=>$value) {
        if($key === '') {
            unset($array[$value]);
        } else {
            echo $key . ': ' . $value . "\n";
        }
    }
}
wordCount($words,5);
