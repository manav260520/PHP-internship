<?php 
$arr = array('php','c','c++','java','Android');
echo count($arr);

$arr = array("C","php","c","android","php","java"); 
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) { 
    echo "<br/><br/>$key - <strong>$value</strong> "; 
} 

$myarray = array(1,2,3,4,5); 
echo array_sum($myarray);

$myarray = array(1,2,3,4,5);
echo array_product($myarray);

$arr = array('c', 'c++', 'java', 'android', 'php'); 
$revarr = array_reverse($arr);
print_r($revarr);

$arr = array('c', 'c++', 'java', 'android', 'php'); 
$temp = in_array('php',$arr);
echo $temp;

$arr = array('c', 'c++', 'java', 'android', 'php'); 
$indexofarray = array_rand($arr);
//Returns Array Index echo $arr[$indexofarray];

$arr = array('c', 'c++', 'java', 'android', 'php'); 
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) { 
    echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
    }
    
$arr = array('c', 'c++','android', 'java', 'android', 'php'); 
print_r(array_unique($arr));

$arr1 = array('c','c++','android','java','php'); 
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2); 
print_r($NewArr);

$myarr = array('c', 'c++','android', 'java', 'php'); 
$check = array_search('android', $myarr); 
echo $check;

$arr = range("11", "20"); foreach($arr as $key => $value) { 
    echo "<br /> $key - $value "; 
}

$arr = array(80,60,50,40,8,74); 
sort($arr); 
print_r($arr);

$arr = array(80,60,50,40,8,74); 
rsort($arr); 
print_r($arr);

$arr = array(80,60,50,40,8,74); 
asort($arr); 
print_r($arr);

$arr = array( "Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green"); 
ksort($arr); 
foreach ($arr as $key => $value) 
{ 
    echo "<br />$key - $value "; 
}

$arr = array( "Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green"); 
krsort($arr); 
foreach ($arr as $key => $value) 
{ 
    echo "<br />$key - $value "; 
}

$myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing"); 
shuffle($myArray);           
// Shuffle the array foreach ($myArray as $key => $value) { echo "<br /> $value "; }

$arr = array("a" => "apple", "b" => "banana"); 
echo array_key_exists('a',$arr);

$arr = array( "Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green"); 
$uppercase = array_change_key_case($arr,CASE_UPPER); 
print_r($uppercase);

$arr1 = array("Banana" , "Apple" , "Mango"); $arr2 = array("Yellow","Red", "Green"); 
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);

$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);

$name = "akash"; 
$subject = "php"; 
$arr = compact("name", "subject"); 
print_r($arr);

$arr = array("a" => "akash", "b" => "banana", "c" => "computer"); 
$fliparray = array_flip($arr); 
print_r($fliparray);

$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php"); 
$diff = array_diff($a, $b); 
print_r($diff); 

$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday"); 
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));

$arr = array("i"=>"c","want"=>"c++","learn"=>"php"); 
$myarr = array_values($arr); 
foreach($myarr as $key => $value) 
{ 
    echo " <br />$key - $value"; 
} 

$a=array("c","c++"); 
array_push($a,"java","php"); 
print_r($a);

$a = array("c", "c++", "Java", "PHP", "ASP"); 
array_pop($a); 
//Remove print_r($a); array_pop($a); 
//Remove print_r($a);

$mystring = "I Love PHP Language"; 
$arr =  explode(" ",$mystring); 
print_r($arr);

$arr = array("i","love","php","language"); 
$mystring = implode(" ", $arr); 
echo $mystring;





