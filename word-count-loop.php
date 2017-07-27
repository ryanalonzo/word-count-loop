<?php
$alice = file_get_contents('alice.txt');
$pattern = ["'", ',',', ','.','-','`','(',')', ':', '_', '"', '!', ';', '?','*'];
$string = str_replace($pattern, '', $alice);
$needles = explode(' ', strtolower($string));
foreach ($needles as $key => $val) {
    if(trim($val) == "") {
        unset($needles[$key]);
    }
    if(isset($words[$val])) {
        $words[$val]++;
    } else {
        $words[$val] = 1;
    }
}
arsort($words);
function wordCount($array, $limit = -1)
{
    $sliced = array_slice($array, 0, $limit);
    foreach($sliced as $key=>$value) {
        echo $key . ' ' . $value . "\n";
    }
}
wordCount($words, 5);


