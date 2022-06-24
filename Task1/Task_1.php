<?php
/**
 *   @author: Hadeel Adres.
 *  * @date: 11 Mai 2022
*/

/** 1.1 program for grade converter from percentage
 * to point using if-else */

echo "1.1 : ";
echo "<br>";
$grade = $_REQUEST["number"]; 
echo "User input is: " . $_POST["number"] . "<br/>";

if($grade >= 95 && $grade <= 100){
    echo"grade in Point is: 1.0 <br/>";

}elseif($grade >= 90 && $grade <= 94){
    echo"grade in Point is: 1.3 <br/>";

}elseif($grade >= 85 && $grade <= 89){
    echo"grade in Point is: 1.7 <br/>";
    
}elseif($grade >= 80 && $grade <= 84){
    echo"grade in Point is: 2.0 <br/>";
    
}elseif($grade >= 75 && $grade <= 79){
    echo"grade in Point is: 2.3 <br/>";
    
}elseif($grade >= 70 && $grade <= 74){
    echo"grade in Point is: 2.7 <br/>";
    
}elseif($grade >= 65 && $grade <= 69){
    echo"grade in Point is: 3.0 <br/>";
    
}elseif($grade >= 60 && $grade <= 64){
   echo"grade in Point is: 3.3 <br/>";
    
}elseif($grade >= 55 && $grade <= 59){
   echo"grade in Point is: 3.7 <br/>";
    
}elseif($grade >= 50 && $grade <= 54){
   echo"grade in Point is: 4.0 <br/>";
    
}
elseif($grade >= 0 && $grade <= 49){
    echo"grade in Point is: 5.0 <br/>";
} 


/** 1.2 program for grade converter from percentage
 * to point using switch-case */
echo "<br>";
echo "1.2 : ";
echo "<br>";
$grade = $_REQUEST["number"];
echo "User input is: " . $_POST["number"] . "<br/>";

switch($grade){
    case ($grade >= 95 && $grade <= 100):
        echo"grade in Point is: 1.0 <br/>"; 
        break;
    case ($grade >= 90 && $grade <= 94):
        echo"grade in Point is: 1.3 <br/>";
        break; 
    case ($grade >= 85 && $grade <= 89):
        echo"grade in Point is: 1.7 <br/>";
        break; 
    case ($grade >= 80 && $grade <= 84):
        echo"grade in Point is: 2.0 <br/>"; 
        break; 
    case ($grade >= 75 && $grade <= 79):
        echo"grade in Point is: 2.3 <br/>";
        break; 
    case ($grade >= 70 && $grade <= 74):
        echo"grade in Point is: 2.7 <br/>";
        break; 
    case ($grade >= 65 && $grade <= 69):
        echo"grade in Point is: 3.0 <br/>";
        break; 
    case ($grade >= 60 && $grade <= 64):
        echo"grade in Point is: 3.3 <br/>";
        break; 
    case ($grade >= 55 && $grade <= 59):
        echo"grade in Point is: 3.7 <br/>";
        break; 
    case ($grade >= 50 && $grade <= 54):
        echo"grade in Point is: 4.0 <br/>";
        break; 
    case ($grade >= 0 && $grade <= 49):
        echo"grade in Point is: 5.0 <br/>";
        break; 
      default:
        echo "invalid number <br/>";
  }


?>

