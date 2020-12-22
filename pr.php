<?php  

function dif($value,$num){
  $total = 1;
  for ($i = $value; $i <= $num;  $i++){
    $total = $total * $i;
  }
      echo $total;
      echo  PHP_EOL;
  }
  dif(1,10);

  echo "ver.2"

/*function sum($num){
  $total = 0;
  for ($i = 1; $i <= $num;  $i++){
      $total += $i;
  }
      echo $total;
      echo  PHP_EOL;
  }
  sum(10);

function cal($x, $y){
  return $x / $y;
};
$result = cal(6, 3);
echo $result;


class Student {

  function avg($math, $english) {
    echo (($math + $english) / 2);
  }  
}

$a001 = new Student();
$a001->avg(80, 70);
*/
