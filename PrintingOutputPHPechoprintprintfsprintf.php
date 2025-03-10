<?php
#echo "hello world!\n";
#print "hello world! 2";
#printf("Hello, from %s, I am %s, and age is %d",$location,$name,$age);
#$result = sprintf("hello, from %s, i am %s, and age is %d", $location,$name,$age);

/*Fromat specifier
%s -stingh
%d- interger
%f-float
%b-boolean
%x- hexadecaimal
price likhte -$%.2f
*/

$location ="Earth";
$age = "20";
$name ="panda";

#printf("Hello, from %s, I am %s, and age is %d",$location,$name,$age);

//store the formatted string in variable
$result = sprintf("hello, from %s, i am %s, and age is %d", $location,$name,$age);
print $result;
?>