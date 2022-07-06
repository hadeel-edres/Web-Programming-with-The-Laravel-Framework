<?php

/**
 *   @author: Hadeel Adres.
 *  * @date: 11 Mai 2022
*/

/** 4.1 program to get a number and convert it into text */

function conv_to_Text($number){

    if($number > 100000){
        echo"<p style='color:darkmagenta'> maximum exceeded </p>";

    }else{
    // Arrays for all possible numbers
    $ones_num = array(
        0 =>"zero",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelfe",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
        "014" => "fourteen"
        );

    $tens_num = array( 
        0 => "zero",
        1 => "ten",
        2 => "twenty",
        3 => "thirty", 
        4 => "forty", 
        5 => "fifty", 
        6 => "sixty", 
        7 => "seventy", 
        8 => "eighty", 
        9 => "ninety" 
        ); 
            
    $hundreds_num = array( 
    "hundred", 
    "thousand", 
    );
$number = number_format($number,2,".",","); 
// breaks a string into an array
$str_to_arr = explode(".",$number); 
$indexnum0 = $str_to_arr[0]; 
$indexnum1 = $str_to_arr[1]; 
$whole_array = array_reverse(explode(",",$indexnum0));

// Sort an associative array in descending order.
krsort($whole_array,1); 
$gettxt = ""; 
foreach($whole_array as $key => $x){
	//substr() function returns a part of a string(0,1)
    while(substr($x,0,1)=="0")
            $x=substr($x,1,5); //(1,5)
    if($x < 20){ 
    $gettxt .= $ones_num[$x]; 
    }elseif($x < 100){ 
    if(substr($x,0,1)!="0")  $gettxt .= $tens_num[substr($x,0,1)]; 
    if(substr($x,1,1)!="0") $gettxt .= " ".$ones_num[substr($x,1,1)]; 
    }else{ 
    if(substr($x,0,1)!="0") $gettxt .= $ones_num[substr($x,0,1)]." ".$hundreds_num[0]; 
    if(substr($x,1,1)!="0")$gettxt .= " ".$tens_num[substr($x,1,1)]; 
    if(substr($x,2,1)!="0")$gettxt .= " ".$ones_num[substr($x,2,1)]; 
    } 
    if($key > 0){ 
    $gettxt .= " ".$hundreds_num[$key]." "; 
    }
    } 
}
    return $gettxt;
    }
    extract($_POST);
    if(isset($convert))
    {
    echo "<p style='color:darkmagenta'>".conv_to_Text("$number")."</p>";
    }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>text-to-speech</title>
        <style>
        body {
            background-color:darkturquoise;
        }
        div{
            background-color: lightpink;
        }
    </style>
	</head>
	<body>
    <div>
        <h2>*** text-to-speech *** </h2>
     </div>
		<form method="post">
				<input type="text" name = "number" placeholder="number" value="<?php if(isset($number)){echo $number;}?>"/>
				<input type="submit" value="Conver Number to Words" name="convert"/>
        </form> 

	</body>
</html>