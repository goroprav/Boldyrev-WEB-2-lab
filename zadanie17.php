<?php
	$arr = array();
	$r = rand(1, 10);
	$k = 1;
	$c = 'x';
	while ($k<=$r){
	 $arr[$k] = $c;
	 $k+=1;
	 $c .='x';
	}
	echo $r, "\n";
	foreach ($arr as $v){
	  echo $v, "\n";
	}
	echo "\n", "\n";
	
	
	
	function arrayFill($a, $b){
	  $c = array();
	  While ($b>0){
	    $c[$b] = $a;
	    $b -=1;
	  }
	  return $c;
	}
	$mas = arrayFill('x', 5);
		foreach ($mas as $v){
	  echo $v, " ";
	}
	echo "\n", "\n";
	
	
	
	$m = array (array(1, 2, 3), 
	array(4, 5), 
	array(6)
	);
	$c =0;
	foreach ($m as $v){
	  $c +=array_sum($v);
	}
		echo $c, "\n", "\n";
	
	
	
	
	
	$ar = array();
	$r = 1;
	$c =0;
	$e =0;
	while ($c < 3){
	  while ($e <3){
	    $ar[$c][$e] = $r;
	    $r+=1;
	    $e +=1;
	  }
	  $e=0;
	  $c +=1;
	}
	foreach ($ar as $v){
	  foreach ($v as $vv){
	    echo $vv, " ";
	  }
	  echo "\n";
	}
		echo "\n", "\n";
	
	
	
	$masi = array (2, 5, 3, 9);
	$result = $masi[0] * $masi[1]+ $masi[2]*$masi[3];
		echo $result, "\n", "\n";
	
	
	
	
	$user = array(
	  'name' => 'Ivan', 
	  'surname' => 'Ivanov', 
	  'patronymic' => 'Ivanovich');
	echo $user['surname'], " ", $user['name'], " ", $user['patronymic'], "\n", "\n";
	
	
	
	
	$date =array ('year' => '2023', 'month'=>'2' , 'day'=>'26');
	echo $date['year'],'-',$date['month'], "-",$date['day'], "\n", "\n";
	
	unset($arr);
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo count($arr), "\n", "\n";
	
	
	
	
		unset($arr);
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo end($arr), " ",prev($arr);
	
?>