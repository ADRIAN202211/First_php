<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    */
    //echo $_REQUEST["name"];
   // echo $_FILES["name"];
       
   //BUILT FUNCTION // This searching a letter  and show de number the chosen "strpos"= 10
  $string = "hello world";
  echo  strpos($string,"d");
    ?>
<br>
   <?php
   //BUILT FUNCTION // This part repalce the letter or datas "str_replace" = php world
  $string = "hello world";
  echo  str_replace("hello","php ",$string);
    ?>
<br>
   <?php
   //BUILT FUNCTION // This fuction change de M=m the letter "strtolower" = hello world

  $string = "hello world";
  echo  strtolower($string);
 
    ?>
<br>
  <?php
   //BUILT FUNCTION // This fuction is the opposite change de m=M the letter "strtoupper" = HELLO WORLD
  $string = "hello world";
  echo strtoupper ($string);
    // <br> is a jump of space ?>
   <br>

     <?php
   //BUILT FUNCTION // when a text o string has a space this funtion take 1 and count = Array ( [0] => hello [1] => world )
  $string = "hello world";
  print_r(explode(" ",$string)); 
 
    ?>
<br> 
   <?php
  // abs(): returns the absolute value (removes the negative sign)
  // abs(-5.5) = 5.5
  $number = -5.5;
  echo abs($number);
?>
<br>
<?php
  // round(): rounds to the nearest whole number
  // .5 is rounded away from zero, so round(-5.5) = -6
  $number = -5.5;
  echo round($number);
?>
<br>
<?php
  // pow(base, exponent): raises the base to the power of the exponent
  // pow(2, 3) = 2 * 2 * 2 = 8
  echo pow(2, 3);
?>
    <br> 
  <?php
  // sqrt(): returns the square root of a number
  // (the number that multiplied by itself gives the original)
  // sqrt(2) = 1.4142135623731
  // sqrt(16) = 4      because 4x4 =16
  echo sqrt(2);
?>
    <br> 
<?php
 // generate a random number between 2-10 or depends the numbers chosen
  echo rand(2, 10);
?>
  <br> 
<?php
// this is a array is a container, help to have a similar string in a same place the output is = 3
  $array = ["apple","banana","orange"];
  echo count ($array);

  array_push($array, "kiwi");
  print_r($array); //print the array =  Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi )
  print_r(array_reverse($array)); //change the orden the values = Array ( [0] => kiwi [1] => orange [2] => banana [3] => apple )

   
   $array1 = ["apple","banana","orange"];
   $array2 = ["pineapple","kiwi","Mango"];
   print_r(array_merge($array1,$array2)); //mixed the arrays and values = Array ( [0] => apple [1] => banana [2] => orange [3] => pineapple [4] => kiwi [5] => Mango )
 
?>
 <br> 
<?php
  echo date("Y-m-d H:i:s");
?>
</body>
</html>