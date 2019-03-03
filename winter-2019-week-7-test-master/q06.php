<?php

$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
];

$country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
];

// your code begins here


foreach($calling_codes as $key => $value) {

    echo "The country code for $country_names[$key] is $value.<br>";
}

foreach($calling_codes as $country_code =>$calling_code) {
    echo "The calling code of ". $country_names[$country_code] . " is ". $calling_code . "<br>";
}

//You don't have to use $calling_codes[$key] because you already have the correct calling code in $value