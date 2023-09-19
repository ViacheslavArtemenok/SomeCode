<?php

/*$a = (int)100;
$b = (int)8;
$c = (int)3500;

if($a > $b XOR $a > $c ){
print_r("Выражение верно!\n");
} else {    
print_r("Выражение неверно!\n");
}
$d = ++$a;
print_r($d . "\n");
print_r($a. "\n");*/

//Задача: Вывести все некратные 7 числа от 1 до 100

/*$massiv = [];

for($i = 1; $i <= 100; $i++){
    $massiv[] = $i;
}
//print_r($massiv);

$index = 0;
while($index < count($massiv)){
if($massiv[$index] % 7 !== 0){
    print_r($massiv[$index] . "\n");
}
    $index++;
}*/
$arr = [17,35,44,55,98,25,11,8];
$i = 0;
$size = 8; // arr.length
$sum = 0;
$srednee = 0;

while($i < $size){
    $sum = $sum + $arr[$i];
    $i++;
}

$srednee = $sum / $size;

print_r($srednee);