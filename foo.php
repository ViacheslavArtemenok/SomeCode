<?php
//false = дверь закрыта, true = дверь открыта,
//$e - проход человека, $i - индекс двери в массиве, начиная с 0, 
//($i + 1) - номер двери на картинке
//Все двери изначально закрыты
//Какие двери останутся открытыми?
function doors($arr): array
{
    $newArr = [];
    for($e = 1; $e <= count($arr); $e++){
        for($i = 0; $i < count($arr); $i++){
            if(($i + 1) % $e === 0){
                $arr[$i] = !$arr[$i];
            }
        }
    }
    foreach($arr as $index => $item){
        if($item){
            $newArr[] = $index + 1;
        }
    }
    return $newArr;
}

function sqrtDoors($arr): array
{
    $newArr = [];
    foreach($arr as $index => $item){
    if(round(sqrt($index + 1)) ** 2 == $index + 1){
        $newArr[] = $index + 1;
    }
    }
    return $newArr;
}

for($e = 0; $e < 100; $e++){
    $arr[] = false;
}
print_r(doors($arr));
print_r(sqrtDoors($arr));
// Остались открытые двери под номерами: (1, 4, 9, 16, 25, 36, 49, 64, 81, 100)

/*function hello($name){
    $first = "Привет, ";
    $second = "! Как твои дела?\n";
    $res = $first . $name . $second;
    print_r($res);
}

hello("Вася");
hello("Петя");
hello("Ира");
hello("Оля");
hello("Лена");
hello("Игорь");

function sum($a, $b){
    return $a + $b;
}

$result = sum(5, 7);
print_r($result);*/