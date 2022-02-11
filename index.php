<?php
// echo 'test';
// 1
// for($i = 0; $i < 4; $i++){
//     $x = rand(0,100);
//     echo $x.'<br>';
// };
//  2
// $arr = [];
// for($i = 0; $i < 4; $i++){
//     $arr[$i] = rand(0,100);
//     echo $arr[$i].'<br>';
    
//     if($arr[$i]%2 != 0 ){
//         $arr[$i] = $arr[$i]*2;
//         echo $arr[$i].' buves nelyginis<br>';
        
//     }
    
// };
// 3 ir 4

// $arr = [];
// for($i = 0; $i< 7; $i++){
//     $arr[$i] = rand(1,7);
//     if($arr[$i] == 1 && $arr[$i]<=5 && $arr[$i]>0 ){
//         echo 'Pirmadienis - darbadienis<br>';
//     }
//     if($arr[$i] == 2 && $arr[$i]<=5 && $arr[$i]>0 ){
//         echo 'Antradienis - darbadienis<br>';
//     }
//     if($arr[$i] == 3 && $arr[$i]<=5 && $arr[$i]>0 ){
//         echo 'Treciadienis - darbadienis<br>';
//     }
//     if($arr[$i] == 4 && $arr[$i]<=5 && $arr[$i]>0 ){
//         echo 'Ketvirtadienis - darbadienis<br>';
//     }
//     if($arr[$i] == 5 && $arr[$i]<=5  && $arr[$i]>0 ){
//         echo 'Penktadienis - pusiau darbadienis<br>';
//     }
//     if($arr[$i] == 6 && $arr[$i]<= 7 && $arr[$i]>5 ){
//         echo 'Sestadienis - savaitgalis<br>';
//     }
//     if($arr[$i] == 7 && $arr[$i]<= 7 && $arr[$i]>5 ){
//         echo 'Sekmadienis - savaitgalis<br>';
//     }
// }

// 4

// $x =rand(1,7);
// if( $x == 1){
//     echo 'Pirmadienis - darbo diena';
// }
// if( $x == 2){
//     echo 'Antradienis - darbo diena';
// }
// if( $x == 3){
//     echo 'Treciadienis - darbo diena';
// }
// if( $x == 4){
//     echo 'Ketvirtadienis - darbo diena';
// }

// if( $x == 5){
//     echo 'Penktadienis - darbo diena';
// }
// if( $x == 6){
//     echo 'Sestadienis - laisva diena';
// }
// if( $x == 7){
//     echo 'Sekmadienis - laisva diena';
// }

// 5
// $arr = [];
// $color = '';
// for($i = 0; $i < 4; $i++){
//     $arr[$i] = rand(0,100);
//     // echo  $arr[$i].'<br>';
//     if($arr[$i]%3 === 0){
//         $color = 'green';
//         echo '<p style="color:'.$color.'">'.$arr[$i].'<p>';
//     }
//     if($arr[$i]%3 === 1){
//         $color = 'yellow';
//         echo '<p style="color:'.$color.'">'.$arr[$i].'<p>';
//     }
//     if($arr[$i]%3 === 2){
//         $color = 'red';
//         echo '<p style="color:'.$color.'">'.$arr[$i].'<p>';
//     }
    
// }
//6

// for($i = 0; $i<=100;$i++){
//     echo $i.'<br>';
// }

// 7

// for ($i=0; $i<=200;$i++){
//     if($i%2 == 0){
//         echo $i.'<br>';
//     }
// }

// 8
// $color = '';
// for ($i=0; $i<=200;$i+=2){
//     if($i%6 == 0){
//         $color = 'blue';
//         echo '<p style="color:'.$color.'">'.$i.'</p>';
//     } else {
//         echo $i.'<br>';
//     }
// }

// 9
// $x = -1;
// while($x%5 != 0){
//     $x = rand(1,50);
//     echo $x.'<br>';
// }

// 10 

// $x = -1;
// $y = -1;
// while(($x%5 != 0) && ($y%11 != 0)){
//     $x = rand(1,100);
//     
//     echo $x.'<br>';
//     
// }

// 11

// $sum = 0 ;
// while($sum < 150){
//     $i = rand(1,10);
//     $sum += $i;
    
// }
// echo $sum;
// 12

// $sum = 0 ;
// $x = 0;
// while($sum < 120){
//     $i = rand(1,10);
//     $sum += $i;
//     $x++;
    
// }
// echo $sum.' | '.$x.' kartu sukosi ciklas';

//13
// $arr = [];
// $sum = 0 ;
// while($sum < 175){
//     $i = rand(1,15);
//     array_push($arr,$i);
//     $sum += $i;
    
// }
// echo $sum.' \ maziausias skaicius'.min($arr).' \ didziausias skaicius'.max($arr);

// 14

// $arr = [];
// $sum = 0 ;
// $average = 0;
// while($sum < 200){
//     $i = rand(1,15);
//     array_push($arr,$i);
//     $sum += $i;
//     $average = array_sum($arr)/count($arr);
    
// }
// echo $sum.' \ vidurkis: '.$average;

// 15
// $arr = [];
// while(count($arr) < 100 ){
//     $i++;
//     array_push($arr,$i);
// }
// var_dump($arr);

// 16

// $arr = [];
// while(count($arr) < 100 ){
//     $i = rand(10,25);
//     array_push($arr,$i);
// }
// var_dump($arr);

// 17

// $arr = [];
// for($i = 1; $i < rand(40,60); $i++){
//     array_push($arr,$i);
// }
// var_dump($arr);

// 18

// $arr = [];
// for($i = 1; $i < rand(80,120); $i++){
//     array_push($arr,rand(5,47));
// }
// var_dump($arr);

// 19

// $letters = ['D','E','F','G','H'];
// $arr = [];
// for($i = 0; $i < 100; $i++){
//     array_push($arr, $letters[rand(0,4)]);
// }
// var_dump($arr);

// 20

// $letters = ['M','N','O','P'];
// $arr = [];
// $m = 0;
//     $n = 0;
//     $o = 0;
//     $p = 0;
// for($i = 0; $i < 100; $i++){
//     array_push($arr, $letters[rand(0,3)]);
    
//     if($arr[$i] === 'M'){
//         $m++;
//     }
//     if($arr[$i] === 'N'){
//         $n++;
//     }
//     if($arr[$i] === 'O'){
//         $o++;
//     }
//     if($arr[$i] === 'P'){
//         $p++;
//     }
    
// }
// if($m>$n && $m>$o && $m>$p){
//         echo 'daugiausiai turejome M - '.$m.'<br>';
//     }
//     if($n>$m && $n>$o && $n>$p){
//         echo 'daugiausiai turejome N - '.$n.'<br>';
//     }
//     if($o>$n && $o>$m && $o>$p){
//         echo 'daugiausiai turejome O - '.$o.'<br>';
//     }
//     if($p>$n && $p>$o && $p>$m){
//         echo 'daugiausiai turejome P - '.$p.'<br>';
//     }
// var_dump($arr);

// 21 

// $arr = [];

// for($i =0; $i<100; $i++){
//     for($j = 0; $j<10; $j++){
//         $arr[$i][$j] = $j+1;
//     }
// }
// echo '<pre>';
// print_r($arr);

// 22

// $arr = [];

// for($i =0; $i<100; $i++){
//     array_push($arr,[$i]);
//     for($j = 1; $j<10; $j++){
//         array_push($arr[$i],rand(1,17));
//     }
// }
// echo '<pre>';
// print_r($arr);

// 23

// $arr = [];

// for($i =0; $i<100; $i++){
//     $array2 = [];

//     for($j = 0; $j<rand(5,18); $j++){
//         array_push($array2,$j);
//     }
//     array_push($arr, $array2);
// }
// echo '<pre>';
// print_r($arr);

// 24

// $arr = [];

// for($i =0; $i<100; $i++){
//     $array2 = [];

//     for($j = 0; $j<rand(5,18); $j++){
//         array_push($array2,rand(5,30));
//     }
//     array_push($arr, $array2);
// }
// echo '<pre>';
// print_r($arr);

// 25

// $arr = [];
// $max = 0;
// for($i =0; $i<100; $i++){
//     $array2 = [];

//     for($j = 0; $j<rand(5,18); $j++){
//         array_push($array2,rand(5,75));
//     }
//     array_push($arr, $array2);
    
// }

// foreach($arr as $key){
//     foreach($key as $val){
//         if($val > $max){
//             $max= $val;
//         }
//     }
// }
// echo 'max num '.$max;

// echo '<pre>';
// print_r($arr);

// 26 

// $arr = [];
// $max = 0;
// $maxcount = 0;
// for($i =0; $i<100; $i++){
//     $array2 = [];

//     for($j = 0; $j<rand(5,18); $j++){
//         array_push($array2,rand(5,75));
//     }
//     array_push($arr, $array2);
    
// }

// foreach($arr as $key){
//     foreach($key as $val){
//         if($val > $max){
//             $max= $val;
//             $maxcount++;
//         }
//     }
// }
// echo 'max num '.$max.' ir pasikartojo '.$maxcount.'';

// echo '<pre>';
// print_r($arr);

// 27

// $arr = [];

// $arr2 = [];

// for($i =0; $i<100; $i++){
//     $array2 = [];
//     $array3 = [];

//     for($j = 0; $j<10; $j++){
//         array_push($array2,rand(1,17));
//         $array3 = sort($array2);
//     }
//     array_push($arr, $array2);
    
//     array_push($arr2, $array3);
// }



// echo '<pre>';
// print_r($arr);

// 28

// $arr = [];



// for($i =0; $i<100; $i++){
//     $array2 = [];

//     for($j = 0; $j<10; $j++){
//         array_push($array2,rand(1,17));
           
//     }
//     array_push($arr, $array2);
    
// }

// for($i = 0; $i < count($arr); $i++){
//     for($j = 0; $j < count($arr); $j++){
//         if(array_sum($arr[$i]) < array_sum($arr[$j])){
//             $temp = $arr[$i];
//             $arr[$i] = $arr[$j];
//             $arr[$j] = $temp;

//         }
//     }
// }



// echo '<pre>';
// print_r($arr);

// 29, 30

// $arr = [];
// $longArray = [];
// $count = 0;
// $sum = 0;


// for($i =0; $i<100; $i++){
//     $array2 = [];
    

//     for($j = 0; $j<10; $j++){
//         array_push($array2,rand(1,17));
        
        
//     }
//     array_push($arr, $array2);
  
// }

// foreach($arr as $key){
//     foreach($key as $val){
//         array_push($longArray, $val);
//         $count++;
        
//     }
// }
// $sum =array_sum($longArray);
// $avg = $sum/$count;
// //  echo $avg.'    ';
//  if($longArray[$count/2]> $avg){
//      echo 'vidurinioji reiksme '.$longArray[$count/2].' didesne uz vidurki '.$avg;
//  } else {
//      echo 'vidurinioji reiksme '.$longArray[$count/2].' mazesne uz vidurki '.$avg;
//  }



// echo '<pre>';
// print_r($longArray);

// 31
// $text = 'Tekstas, kuris yra siuo atveju argumentas';

// function text($text){
//     echo "<h1>$text</h1>";
// }
// echo text($text);

// 32

// $a = 4;
// $b = 6;
//  function isint($a,$b) {
//      if(is_int($a) && is_int($b)){
//          echo 'sum of given number is '.($a+$b);
//      } else {
//          echo 'vienas arba abu kintamieji nera skaiciai';
//      }
//  }

//  echo isint($a,$b);

// 33 

// $a = 5;
// $b = 4;

// function quote($a, $b){
//     if($a > $b){
//         echo '<h1> A kintamasis didesnis uz B kintamaji.</h1>';
//     } elseif($a < $b){
//         echo '<h1> A kintamasis mazesnis uz B kintamaji.</h1>';
//     } else {
//         echo '<h1> Kintamieji lygus.</h1>';
//     }
// }
//  echo quote($a,$b);

// 34

// $num = rand(1000,9999);


// function number($num){
//     if(is_int($num) && $num > 999 && $num <10000){
        
//         if ($num % 400 == 0){
//             echo 'keliamieji metai';
//         } else if ($num % 100 == 0){
//             echo 'ne keliamieji metai';
//         } else if ($num % 4 == 0){
//             echo 'keliamieji metai';
//         } else{
//             echo 'ne keliamieji metai';
//         }

//     } else {
//         echo 'tai nera skaicius arba sis skaicius ne atitinka salygu';
//     }
// }

// echo number($num);

// 35 

// $num = 8456;

// function number($num){
    
//     // echo $num.' pradinis';
//     if(is_int($num)){
//         $arr = str_split($num);
//         array_multisort($arr);
//         $newnum = implode('', $arr);
//         echo $newnum;
//     } else {
//         echo 'tai nera skaicius';
//     }
// }
 


// echo number($num);

// 36

// $num = rand(100,1000);
// function znum($num) {
//     if(is_float($num)){
//         echo 'Skaicius nera sveikasis';
        
//     } else {
        
//         for($i = 2; $i < $num; $i++){
            
//             if($num%$i == 0 && $i > 1){
//                 $j++;
                
                
//             }
            
//         }
//         echo $j.' is tiek sveikuju skaiciu dalijasi skaicius '.$num;
//     }
// }
//  echo znum($num);

// 37 
// $arr = [];
// for($m = 0; $m < 10; $m++){
//     array_push($arr,rand(1,9));
// }
// print_r($arr);

// function telefonoNumeris($arr){
//     if(is_array($arr)){
//         for($i = 0; $i < count($arr); $i++){
//             if(is_int($arr[$i]) && count($arr)==10){
               
//             }
//         }
//         echo '('.$arr[1].$arr[2].$arr[3].')'.$arr[4].$arr[5].$arr[6].'-'.$arr[7].$arr[8].$arr[9].$arr[10];

//     }
// }
//  echo telefonoNumeris($arr);








?>

