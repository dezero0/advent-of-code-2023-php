<?php
    $wordsArr = [
        "0" => "zero",
        "1" => "one",
        "2" => "two",
        "3" => "three",
        "4" => "four",
        "5" => "five",
        "6" => "six",
        "7" => "seven",
        "8" => "eight",
        "9" => "nine",
    ];
    $data = file_get_contents('input.txt');
    $data = explode("\n", $data);
    $answer = 0;
    for ($i = 0; $i < 1000; $i++) {

        for ($a = 0; $a < count($wordsArr); $a++) {
             $data[$i] = str_replace($wordsArr[$a], (string) $a, $data[$i]);
            //echo $data[$i]." ".$a."<br>";
        }

        $arr = str_split($data[$i]);
        print_r($arr);
echo "<br>";
        for ($j = 0; $j < count($arr); $j++) {
            if (is_numeric($arr[$j])) {
                $nr1 = $arr[$j];
                break;
            }
        }
        $arr = array_reverse($arr);
        print_r($arr);
echo "<br>";
        for ($j = 0; $j < count($arr); $j++) {
            if (is_numeric($arr[$j])) {
                $nr2 = $arr[$j];
                break;
            }
        }
        $number = $nr1.$nr2;
        echo $i." ".$answer."+".$number."=".$answer+$number."<br>";
        $answer = $answer + $number;
    } 
    echo $answer;

?>


