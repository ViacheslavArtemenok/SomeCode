<?php
ini_set('memory_limit', '100M');

function simpleSort($arr){
            $t1 = microtime(true);
        $newArr = [];
        while(count($arr) > 0) {
            $minItem = $arr[0];
            $minIndex = 0;
            for($i = 1; $i < count($arr); $i++){
                if($arr[$i] < $minItem){
                    $minItem = $arr[$i];
                    $minIndex = $i;
                }
            }
            $newArr[] = $minItem;
            array_splice($arr, $minIndex, 1);
        }
        $t2 = microtime(true);
        echo("\n" . round($t2 - $t1, 6) * 1000 . " сек". "\n" );
        return $newArr;
    }


    function quickSort(array $arr) {
        $count= count($arr);
        if ($count <= 1) {
            return $arr;
        }
    
        $first_val = $arr[0];
        $left_arr = array();
        $right_arr = array();
    
        for ($i = 1; $i < $count; $i++) {
            if ($arr[$i] <= $first_val) {
                $left_arr[] = $arr[$i];
            } else {
                $right_arr[] = $arr[$i];
            }
        }
    
        $left_arr = quickSort($left_arr);
        $right_arr = quickSort($right_arr);
    
        return array_merge($left_arr, array($first_val), $right_arr);
    }

function qsort($arr){
    if(count($arr) < 2){
        return $arr;
    }
    else{
        $less = [];
        $greater = [];
        for($i = 1; $i < count($arr); $i++){
            if($arr[$i] < $arr[0]){
                $less[] = $arr[$i];
            } else {
                $greater[] = $arr[$i];
            }
        }
        return array_merge(qsort($less), [$arr[0]], qsort($greater));
        }
}

function recursive($x){
    if($x <= 1){
        return $x;
    } else {
        return $x * recursive($x - 1);
    }
}

function show($result){
    foreach($result as $index => $item){
        if($index === 0){
            echo($item);
        }
        else echo('_' . $item);
    }
}
function taxi(int $count, float $min, int $score): int
{

    $temp = $count * 5;
    $result = 5; 
    $counter = 0;
    while($result > $min){
        $temp = $temp - (5 - $score);
        $result = $temp / $count;
        $counter++;
    }
    return $counter;
}

for($i = 0; $i<10; $i++){
    $arr[] = rand(1, 100);
}
show($arr);
echo("\n" . '____array______' . "\n" );
//echo(recursive(10) . "\n");
//echo("\n" . '__________' . "\n" );
show(simpleSort($arr));
echo("\n" . '_____simplesort_____' . "\n" );
echo("\n");
$t1 = microtime(true);
show(qSort($arr));
echo("\n" . '_____qsort_____' . "\n" );
$t2 = microtime(true);
        echo("\n" . round($t2 - $t1, 6) * 1000 . " сек". "\n" );
//print_r(array_splice($arr, 0, 1));


echo(taxi(150, 4.80, 1) . " раз можно получить оценку \"1\"". "\n" );
echo(taxi(150, 4.80, 2) . " раз можно получить оценку \"2\"". "\n" );
echo(taxi(150, 4.80, 3) . " раз можно получить оценку \"3\"". "\n" );
echo(taxi(150, 4.80, 4) . " раз можно получить оценку \"4\"". "\n" );
?>