<?php
$x = rand(0,100);
$a = 1;
$b = 1;
$c = 1;


while ($a < $x) {
      $c = $a;
      $a = $a + $b;
      $b = $c;
}



if ($a > $x)

{
    echo 'задуманное число НЕ входит в числовой ряд';
}


if ($a == $x)
{
    echo 'задуманное число входит в числовой ряд';
  }
?>
