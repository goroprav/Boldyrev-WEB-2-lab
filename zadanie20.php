<?php
$mas = array(1, 2, 3, 4, 5);
$a = array_sum($mas)/ count($mas);
echo $a;

$arr = range(1, 100);
echo "\n", array_sum($arr);

echo "\n";
$m = array (9, 4 ,1, 16, 25, 100, 64);
function sq($a){
  return sqrt($a);
}
$m = array_map('sq', $m);
foreach ($m as $v){
  echo $v, " ";
}

echo "\n", "\n";
$mm = array_combine(range('a', 'z'), range(1, 26));
$r = 1;
while ($r <= 26){
echo key($mm), " ", current($mm), "\n";
next($mm);
$r +=1;
}

echo "\n", "\n";
$a = '1234567890';
$masi = str_split($a, 2);
echo array_sum($masi);

?>