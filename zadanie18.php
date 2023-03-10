<?php
function one($a, $b)
{
 if ($a + $b > 10){
   return true;
 }
 return false;
}

function two($a, $b)
{
 if ($a == $b){
   return true;
 }
 return false;
}


$a = rand (1,10);
$b = rand (1,10);
echo $a, " ", $b, " ", one($a, $b);


echo "\n", "\n";
$a = rand (1,10);
$b = rand (1,10);
echo $a, " ", $b, " ", two($a, $b), "\n", "\n";


$test = rand(0, 1);
if (!$test){
  echo 'верно';
}

echo "\n";
$age = rand (1, 200);
echo $age, " ";
if ($age > 99 || $age < 10){
  if ($age >99){
    echo'Число больше 99';
  } else{
    echo 'Число меньше 10';
  }
} else{
  $c = 0;
  while ($age > 0){
    $c += $age%10;
    $age /=10;
  }
  if ($c <=9){
  echo 'Cумма цифр однозначна';
  }else{
     echo 'Cумма цифр двузначна';
  }
  
}

echo "\n", "\n";
$arr = array();
echo 'Размер массива: ';
$r = rand(1, 10);
echo $r, "\n";
echo "Числа в массиве:";
while ($r >0){
  $arr[$r] = rand(0, 100);
  echo $arr[$r], " ";
  $r-=1;
}
if (current($arr) != null and next($arr) != null and next($arr) != null and next($arr) == null){
  reset($arr);
  $c = current($arr)+next($arr)+next($arr);
  echo "\n", 'Сумма чисел: ',$c ;
}


?>