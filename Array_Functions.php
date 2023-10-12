<?php

//count sizeof
$a=['x'=>[1,2,3,4,5],'b'=>[6,7,8,9,0]];
echo count($a,1).'<br>'; //Full count of Multidimensional Array
echo count($a).'<br>'; //only key count
echo sizeof($a,1).'<br>'; //Full count of Multidimensional Array
echo sizeof($a).'<br>'; // only key count

//in_array
//in_array(Element,array,strictmode)
$b=[1,2,3,4,'5',6,'7','key','5'];
echo in_array(5,$b).'<br>';
echo in_array(5,$b,1).'<br>';
//returns 1 if true

//array_search
//array_search(Element,array,strictmode)
//returns first index of found number 
echo array_search(5,$b).'<br>';

//array_replace
//replaces the first array with second
$colour=['red','green','blue','magenta'];
$dark_c=['black','brown'];
$temp=array_replace($colour,$dark_c);
echo '<pre>';
print_r($temp);
echo '</pre';

//array_push
//push elements in array at last
array_push($temp,'yellow');
echo '<pre>';
print_r($temp);
echo '</pre';

//array_pop
//pop or delete elements in array at last
array_pop($temp);
echo '<pre>';
print_r($temp);
echo '</pre';

//array_unshift
//push elements in array at first
array_unshift($temp,'yellow');
echo '<pre>';
print_r($temp);
echo '</pre';

//array_shift
//pop or delete elements in array at first
array_shift($temp);
echo '<pre>';
print_r($temp);
echo '</pre';

//array_splice
//to insert or delete in array
//array_splice( array $input , int $offset [, int $length = count($input) [, mixed $replacement = array() ]])
//array_splice(array,index,length from index to be changed , replacement if any)

$color=['red','green','blue','magenta'];
$darkcolour=['black','brown'];
$act=array_splice($color,2,1);
//this is removed from array
echo '<pre>';
print_r($act);
echo '</pre';
//this is the new array
echo '<pre>';
print_r($color);
echo '</pre';
//replace 1 item at index 2
array_splice($color,2,1,"Black");
echo '<pre>';
print_r($color);
echo '</pre';
//add 2 items at last
array_splice($color,count($color),2,["indiago",'yellow']);
echo '<pre>';
print_r($color);
echo '</pre';

//sort( array $array [, int $sort_flags = SORT_REGULAR ])
//Sort an array in acsending order
$s=[22,77,99,33,63,1,57,8,2,445,75,23,88,234,22,55,123];
sort($s);
echo '<pre>';
print_r($s);
echo '</pre';

//rsort( array $array [, int $sort_flags = SORT_REGULAR ])
//rsort an array in descending order
$s=[22,77,99,33,63,1,57,8,2,445,75,23,88,234,22,55,123];
rsort($s);
echo '<pre>';
print_r($s);
echo '</pre';

//asort()asort( array $array [, int $sort_flags = SORT_REGULAR ])
//Sort an array and maintain index association
//sort an associative array in ascending order according to value
$age = array("Peter"=>"47", "Ken"=>"37", "Joe"=>"43");
asort($age);
echo '<pre>';
print_r($age);
echo '</pre';

//ksort( array $array [, int $sort_flags = SORT_REGULAR ])
//Sort an array by key
//sort an associative array in ascending order according by key
$age = array("Peter"=>"47", "Ken"=>"37", "Joe"=>"43");
ksort($age);
echo '<pre>';
print_r($age);
echo '</pre';

//arsort()arsort( array $array [, int $sort_flags = SORT_REGULAR ])
//Sort an array and maintain index association
//sort an associative array in descending order according to value
$age = array("Peter"=>"47", "Ken"=>"37", "Joe"=>"43");
arsort($age);
echo '<pre>';
print_r($age);
echo '</pre';

//krsort( array $array [, int $sort_flags = SORT_REGULAR ])
//Sort an array by key
//sort an associative array in descending order according by key
$age = array("Peter"=>"47", "Ken"=>"37", "Joe"=>"43");
krsort($age);
echo '<pre>';
print_r($age);
echo '</pre';


//array_merge() 
//array_merge( array $array1 [, array $... ])
//Merge one or more arrays
$a1=[1,2,3,4,5];
$a2=[6,7,8,9,0];
$a3=array_merge($a1,$a2);
echo '<pre>';
print_r($a3);
echo '</pre';

//array_combine()
//array_combine( array $keys , array $values )
//Creates an array by using one array for keys and another for its values
$b1=['a','b','c','d','e'];
$b2=[6,7,8,9,0];
$b3=array_combine($b1,$b2);
echo '<pre>';
print_r($b3);
echo '</pre';

//array_flip()
//array_flip( array $array )
//Exchanges all keys with their associated values in an array
$ace = array("Peter"=>"47", "Ken"=>"37", "Joe"=>"43");
$nace=array_flip($ace);
echo '<pre>';
print_r($nace);
echo '</pre';

?>