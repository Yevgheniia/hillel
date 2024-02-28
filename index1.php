<?php

    $result=0;
    $result=fmod(7,3);
    echo $result.', ';

    $result = intval(7/7.15);
    echo $result.', ';

    $result = sqrt(25);
    echo $result.', ';

    $str="Десять негритят пошли купаться в море";
    $word = explode(" ", $str);
    echo $word[3].', ';

    echo $str[16].', ';

    $result = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
    $length_str=strlen($str);
    echo $length_str.', ';

    $a=true;

    if($a==1){
         echo "a равно 1".', ';
    }
    else{
        echo "a не равно 1".', ';
    }
    $a=false;

    if($a==0){
    echo "a равно 0".', ';
    }
    else{
        echo "a не равно 0".', ';
    }
    $str1='three';
    $str2='три';

    if(strlen($str1)>strlen($str2)){
        echo 'str1 больше str2'.', ';
    }
    elseif (strlen($str2)>strlen($str1)){
        echo 'str2 больше str1'.', ';
    }
    else{
        echo 'str2 равны str1'.', ';
    }

    $a=125*13+7;
    $b=223+28*2;
    if($a>$b){
        echo 'a больше b'.'.';
    }
    elseif ($str2>$str1){
        echo 'b больше a'.'.';
    }
    else{
        echo 'a равны b'.'.';
    }




