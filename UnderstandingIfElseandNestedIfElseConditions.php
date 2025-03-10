<?php
/*
* conditional satements
*ternary operators
*/
# conditional satements

// $age = 53;
// if($age == 50){
//     echo " my age is 50 ";
// }
// elseif($age == 51) {
//     echo "my age is 51 ";
// }elseif($age == 52) {
//     echo "my age is 52 ";
// }elseif($age == 53) {
//     echo "my age is 53 ";
// }
#ternary operators poss:1/2

// else{
//     echo "my age is not found";
// }
// $age =55;
// $myage =$age == 51 ? 'my age is 51' :
//   ($age == 52 ? 'my age is 52':
// ( $age == 53 ? 'my age is 53' :
// ($age == 54 ? 'my age is 54':' my age is not Unknown')));

// echo $myage;

$age =51;
$ages =[
 51 => 'my age is 51',
 52 =>' my age is 52',
 53 => 'my age is 53',
 54 => 'my age is 54' ,
];
$myage =  $ages[$age] ?? 'my age is unknown';

echo $myage;

echo "\n";