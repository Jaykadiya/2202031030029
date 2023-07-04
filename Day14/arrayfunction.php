
<?php
echo "array function used for Change into uppercase:"."<br>";
$age=array("jay","rohit");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";


echo "arraay function used for flip key to value and value to key:"."<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
echo "<br>";

echo "array function used for merge two arrays:"."<br>";
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo "<br>";

echo "array function for pop last element of array:"."<br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br>";

echo"array function for insert element:"."<br>";
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";



?>
