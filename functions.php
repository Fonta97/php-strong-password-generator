<?php
function generatePassword($length)
{
    //impostazione limite carattere a 10
    $limit = 10;
    if ($length > $limit) {
        $length = $limit;
    }
    srand(time());


    //randomizzazione caratteri quali considerare
    $alfa_number = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $len_alfa_number = strlen($alfa_number);
    $pass_random = "";
    $i = 0;

    //while fino al raggiungimento dei caratteri
    while ($i < $length) {
        //funzione rand
        $number_random = rand(0, $len_alfa_number - 1);
        $pass_random .= $alfa_number[$number_random];
        $i++;
    }
    return $pass_random;
}
echo generatePassword(8);