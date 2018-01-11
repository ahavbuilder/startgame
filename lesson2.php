<?php
$x = rand(0,100);
$a = 1;
$b = 1;


if ($a > $x)

{
    echo 'задуманное число НЕ входит в числовой ряд';
}
// elseif ($a < $x)
// {
//   echo "$a < $x";
// }
else {
  echo "$a < $x";
}


if ($a == $x)
{
    echo 'задуманное число входит в числовой ряд';
  }
// elseif ($a != $x)
// {
//   echo "$a != $x";
// }
// else {
//   echo "$a != $x";
// }
while ($a < $x) {
  echo "$x";
break;
}
switch ($a + $b){
  case 0:
  echo "$x";
  break;

  case 1:
  echo "$b = $X";
  continue;
}
