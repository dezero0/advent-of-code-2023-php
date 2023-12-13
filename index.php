<?php
    $wordsArr = [
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
        $arr = str_split($data[$i]);
        for ($j = 0; $j < count($arr); $j++) {
            if (is_numeric($arr[$j])) {
                $nr1 = $arr[$j];
                break;
            } else {
                $break = false;
                foreach ($wordsArr as $key => $word) {
                    //echo $data[$i].$word.$j." ";
                    if (strpos($data[$i], $word, $j) === $j) {
                        $nr1 = (int) $key;
                        $break = true;
                        break;
                    }
                }
                if ($break) {
                    break;
                }
            }
        }
        $arr = array_reverse($arr);
        for ($j = 0; $j < count($arr); $j++) {
            if (is_numeric($arr[$j])) {
                $nr2 = $arr[$j];
                break;
            } else {
                $break = false;
                foreach ($wordsArr as $key => $word) {
                    if (strpos(strrev($data[$i]), strrev($word), $j) === $j) {
                        $nr2 = (int) $key;
                        $break = true;
                        break;
                    }
                }
                if ($break) {
                    break;
                }
            }
        }
        $number = $nr1.$nr2."<br>";
        $answer = $answer + $number;
    } 
    echo $answer;

?>


