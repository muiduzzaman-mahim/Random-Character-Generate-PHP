<?php
function random_strings($length_of_string)
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    return substr(str_shuffle($str_result), 0, $length_of_string);
}

$url_id = random_strings(100) . random_strings(100);

$url = 'https://www.google.com?id=' . $url_id;

echo $url;
?>
