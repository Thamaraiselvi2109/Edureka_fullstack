<?php
//assignment - 1
$a = 20;
$b = 5;
echo "<h1>Assignment-1</h1><h3>Write a PHP script to add, subtract, multiply and divide two variables and display the value</h3>";
echo "The value of a is {$a} <br>The value of b is {$b}";
echo "<br><br>";
echo "The addition of two number $a + $b is " , $a+$b;
echo "<br>";
echo "The subtraction of two number $a - $b is " , $a-$b;
echo "<br>";
echo "The multiplication of two number $a * $b is " , $a*$b;
echo "<br>";
echo "The division of two number $a / $b is " , $a/$b;
echo "<br><br>";
//assignment - 2
echo "<h1>Assignment-2</h1><h3>Write a PHP script to concatenate three strings using concatenation operator</h3>";
$str1 = "Edureka ";
$str2 = "online ";
$str3 = "certification course";
echo "<b>The concatenated strings are </b>", $str1.$str2.$str3;
//assignment - 3
echo "<h1>Assignment-3</h1><h3>Write a PHP script to print “*” in thebelow format:</h3>";
$star="*";
while(strlen($star)<11){
    print $star;
    print"<br>";
    $star= $star."*";
}
?>