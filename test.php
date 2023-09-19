<?php
/*echo("Hello world\n");
echo date('Y'."\n");


$birthDate = strtotime('1990-01-31');
$birthDay = date('m-d', $birthDate);
$today = date('m-d');

if($today > $birthDay){
    echo(date('Y') - date('Y', $birthDate));
} else {
    echo(date('Y') - date('Y', $birthDate) - 1);
};
echo("\n");
echo($birthDay);
echo("\n" . 3**3);

function getNumber($number, $arr): bool
{
    $result = false;
    foreach($arr as $item){
        if($number === $item){
            $result = true;
            break;
        } 
    }
return $result;
};

function progressive($a){
 if(!is_int($a)){
    return 'Нужно ввести целое число!!!';
}
    else if($a === 1){
        return 1;
    }
    else {
        return progressive($a - 1) .'_'. $a;
    }
}
function howLong($a){
$start = microtime(true);
$result = progressive($a);
$end = microtime(true);
$timeRes = round($end - $start, 20);
return [$result, $timeRes];
}

echo("\n");
/*echo(getNumber(1, [0,65,58,26,55,38,1,98]) . "\n");
echo(is_string(3) ? 'Строка' : 'Число');
$recursive = howLong(10);
echo($recursive[0]."\n");
echo($recursive[1]."\n");

$a = 5;
print_r([++$a, $a, $a++, $a]);

$b=111;

for(;;){
        echo("\n" . $b++);
        if($b > 113){
            break;
        }
    }
    
$arr = array(5,2,3);
print_r($arr);
echo(count($arr));

$arr = ['name' => 'Bill', 'age' => 18, 'email' => 'billwill94@gmail.com'];
$newArr = array_map(function($item){
    return 'new_' . $item;
}, $arr);
print_r($newArr);

foreach($newArr as $index => $item){
    $index = 'new_'. $index;
    $newArr[$index] = array_merge($arr2, [$index => $item]);
}
print_r($arr2);

$arr = [2,5,66,485,632];
$arr2 = $arr;
array_pop($arr);
print_r($arr2);
print_r($arr);

class TestObject {
public $name;
public $age;

public function __construct($name, $age){
$this->name = $name;
$this->age = $age;
    }
public function getData(): array
{
    return [$this->name, $this->age];
}
    };

/*print_r($obj = new TestObject('Bill','33'));
print_r($obj->getData());
print_r($obj->name);
unset($obj->name);
print_r($obj);

$arr = [1,2,3,4,5];
print_r($arr);
unset($arr[0]);
print_r($arr);
print_r($arr);
array_splice($arr, 0, 1);
print_r($arr);
$arr = [1,2,3,4,5];
function getAll($arr){
    foreach($arr as $item){
        yield $item . '_new';
    }
};
$newArr = getAll($arr);
foreach($newArr as $item){
    echo($item . "\n");
}
var_dump($newArr);*/
