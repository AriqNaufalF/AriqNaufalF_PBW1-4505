<?php
$strings = [
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
];

$find = [
    'Abdullah',
    'kucing',
    'lucu',
    'bermain'
];

$replace = [
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
];

$edit_strings = str_replace($find, $replace, $strings);

foreach ($edit_strings as $string) {
    echo $string . '<br>';
}
