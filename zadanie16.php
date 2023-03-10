<?php


function increaseEnthusiasm($a)
{
 
    return $a.'!';
}

function repeatThreeTimes($a){
  return $a.$a.$a;
}

function cut($a, $b = 10){
  if (strlen($a) < $b){
    $b = strlen($a);
  }
  $c = null;
  $r = 0;
  while ($b >0){
    $c = $c.$a[$r];
    $r +=1;
    $b -=1;
  }
  
 return $c;
}

function cout($a, $b = 0){
  if (current($a) != null){
    echo current($a), " ";
    next($a);
    cout($a);
  }
return null;
}

function summi($a){
  $c = 0;
  if ($a < 10){
    return $a;
  }else {
    while ($a > 0){
      $c += $a%10;
      $a = $a/10;
    }
   $c = summi($c);
  }
  return $c;
}




$r = 'hi';
echo increaseEnthusiasm($r);
echo "\n";
echo repeatThreeTimes($r);
echo "\n";
echo increaseEnthusiasm(repeatThreeTimes($r));
echo "\n";
$r = "Some info";
echo cut($r, 3);




$mas = array();
$r = 1;
while ($r < 11){
  $mas[$r] = rand(1, 100);
  $r +=1;
  
}
echo "\n";
echo cout($mas);

echo "\n";
$a = rand(1, 10000);
$b = summi($a);
echo $a, " ", $b;


?>