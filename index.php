<?php

function test_string_left_trim(string $str, mixed $val = " ") : string {
    $result = "";
    $stop = false;

    for ($i = 0; $i < strlen($str); $i++) :

        if ($str[$i] === $val && $stop === false ) {
            continue;
        } else {
          $stop = true;
        }
        $result .= $str[$i];

    endfor;

    return $result;

}

echo test_string_left_trim("       Test") . "<br>";
echo strlen(test_string_left_trim("       Test")) . "<br>";
echo test_string_left_trim("@@@@@@@@@@Test", "@") . "<br>";
echo strlen(test_string_left_trim("@@@@@@@@@@Test", "@")) . "<br>";


echo test_string_left_trim("       Te  st") . "<br>";
echo strlen(test_string_left_trim("       Te  st")) . "<br>";