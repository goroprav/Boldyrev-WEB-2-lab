<?php

$a=10;
$b=3;
if ($a%$b == 0){
  echo "Делится ", $a/$b;
}else{
  echo "Делится с остатком ", $a%$b;
}

$st = pow(2,10);
echo "\n", $st;
$st = sqrt(245);
echo "\n", $st;

$array = array(4, 2, 5, 19, 13, 0, 10);
$res = 0;
foreach ($array as $value) {
    $res += $value**2 ;
}
echo "\n", sqrt ($res), "\n";

echo "\n", round (sqrt(379),);
echo "\n", round (sqrt(379), 1);
echo "\n", round (sqrt(379),2), "\n";


$mas = array(
  "floor" => floor(sqrt(587)),
  "ceil" => ceil(sqrt(587))
  );
  
  foreach ($mas as $value) {
    echo "\n", $value, " " ;
}

$arr = array(4, -2, 5, 19, -130, 0, 10);
echo "\n", min($arr), " ", max($arr);


echo "\n";
echo "\n", rand(1, 100);
$mm = array();
$r = 1;
while ($r < 11){
  $mm[$r] = rand(1, 100);
  $r +=1;
  
}
echo "\n";
  foreach ($mm as $value) {
    echo  $value, " " ;
}


$a = rand(1,100);
$b = rand(1,100);
echo "\n", "\n", abs($a-$b);
echo "\n";


$ms =array(
  1 => 1, 
  2 =>2, 
  3=>-1, 
  4=>-2, 
  5=>3, 
  6=>-3);
$r = 1;
while ($r <= 6){
  $ms[$r] = abs($ms[$r]);
  $r +=1;
}
echo "\n";
  foreach ($ms as $value) {
    echo  $value, " " ;
}


echo "\n";
$a = rand(1, 200);
$r = 2;
$qq = array( 1=>1);
while ($r <=$a){
  if ($a%$r == 0){
    $qq[] = $r;
  }
  $r +=1;
}

echo "\n" , $a;
echo "\n";
  foreach ($qq as $value) {
    echo  $value, " " ;
}



echo "\n";
$rt = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$rt = array_values($rt);
$r =0;
$a =0;
  foreach ($rt as $value) {
    if ($a <=10){
      $a += $value;
      $r +=1;
    }
}
echo "\n" , $r;


?>