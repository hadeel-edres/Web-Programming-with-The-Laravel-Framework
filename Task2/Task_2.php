<?php

/**
 *   @author: Hadeel Adres.
 *  * @date: 11 Mai 2022
*/

/** 1.1 Looping with for */

for($i = 0; $i < 5; $i++){
  for($k = 0; $k < $i; $k++){
    print " ";
  }
for($j = 0; $j < 5-$i; $j++){
  print "*";
}
print "\n"; 
}

print "\n"; 
/** 1.2 Looping do-while  */

$c = 0;
do{
  $a = 0;
  $b = 0;
  do{
    print " ";
    $a++;
  }while($a <= $c);

  do{
    echo "*";
    $b++;
  }while($b < 5-$c);
  print "\n";
  $c++;
  }while($c < 5);

echo "\n";  


?>