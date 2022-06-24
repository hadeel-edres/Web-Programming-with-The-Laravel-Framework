<?php 

/**
 *   @author: Hadeel Adres.
 *  * @date: 11 Mai 2022
*/

/** 3.1 concatenation function */
$param1 = array ("hello" , "halo" , "foo");
$param2 = array ("world" , "steven" , "bar");

function fun($p1 , $p2){
    $get_result= array();
    if(count($p1) == count($p2)){
      for($i=0; $i < count($p1); $i++){
        $get_result[$i] = $p1[$i]." " .$p2[$i];
}
    }else{
      echo"Error";
    }
    
  return $get_result;
}
// $result is our new array: ("hello world", "halo steven", "foo bar").
$result = fun($param1 , $param2);
echo "3.1 :";
echo "<br>";
print_r ($result);
echo "<br>";

/** 1.2 extractor function to print the content 
 *  of arrays */
echo "<br>";
echo"3.2 :";
echo "<br>";
function  funExtractor($result){
  for($i=0; $i < count($result); $i++){
    echo"Content_".$i. "="." ". $result[$i]. "<br>";

  }
} 
/* print the content of arrays in problem 3.1.
Content_0= hello world
Content_1= halo steven
Content_2= foo bar */
funExtractor($result);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Function and Arrays</title>
        <style>
        body {
            background-color:lavender;
        }
    </style>
	</head>
  <body>
      </body>