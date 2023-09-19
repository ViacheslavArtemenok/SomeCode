<?php

function runDog($dist = 50, $minDist = 10, $speedFriend1 = 1, $speedFriend2 = 2, $speedDog = 5): int
{
$dogStep = 0;// количество пробежек собаки
while($dist > $minDist){
 $checker = $dogStep % 2;
 if($checker === 0){
   // собака бежит от 1-го друга ко 2-му
   $jointTime = $dist / ($speedFriend2 + $speedDog);// общее время, через которое встретятся 2-й друг и собака
   $distFriend1 = $speedFriend1 * $jointTime;// успел пройти 1-й друг, пока бежала собака
   $distFriend2 = $speedFriend2 * $jointTime;// успел пройти 2-й друг, пока бежала собака
   $dist = $dist - ($distFriend1 + $distFriend2);// дистанция сократилась на расстояние, которое прошли оба друга
   $dogStep++;// на одну пробежку собаки стало больше
 } else {
   // собака бежит от 2-го друга к 1-му
   $jointTime = $dist / ($speedFriend1 + $speedDog);// общее время, через которое встретятся 1-й друг и собака
   $distFriend1 = $speedFriend1 * $jointTime;// успел пройти 1-й друг, пока бежала собака
   $distFriend2 = $speedFriend2 * $jointTime;// успел пройти 2-й друг, пока бежала собака
   $dist = $dist - ($distFriend1 + $distFriend2);// дистанция сократилась на расстояние, которое прошли оба друга
   $dogStep++;// на одну пробежку собаки стало больше
 }
   
}
return $dogStep;
}



$result = runDog();
print_r($result);


