<?php
// array_keys -returns the keys, numeric and string, from the array.

$array = array('car' =>array ('Lexus', 'Cadillac', 'Mercedes'),
			    'models' =>array('cs40', 'cs2s', 'esl20')) ;
print_r(array_keys($array));

?>

<?php
//array _search - search an array for the value  and return its key.
//array_search(value,array,strict) answerb

$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true);
?>

<?php
//arraywalk- array_walk(array,myfunction,parameter...)
//The array_walk() function runs each array element in a user-defined function.

function myfunction($value,$key,$p)
{
echo "$key $p $value<br>";
}
$a=array("a"=>"shirts","b"=>"pants","c"=>"coats");
array_walk($a,"myfunction","has the value");
?>
//a has the value shirt
//b has the value pants
// c has the value coats

 <?php
 //array_pop - mixed array_pop ( array &$array )
 //array_pop() pops and returns the last value of the array, shortening the array by one element.
// note rabbits will be missing after pring
$animals = array("birds", "cats", "dogs", "rabbits");
$housepet = array_pop($animals);
print_r($animal);
?>

<?php

//int array_push ( array &$array , mixed $value1 [, mixed $.. ] )
 
 
$juice = array("orange", "lemon");
array_push($stack, "berry", "watermelon");
print_r($juice);
?>


<?php
//array combine - array array_combine ( array $keys , array $values )

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
?>


<?php

//fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = "," 
// [, string $enclosure = '"' [, string $escape = "\" ]]]] )


$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>

<?php
//good for table
//implode - Join array elements with a glue string.
// string implode ( string $glue , array $pieces )


    $a1 = array("1","2","3");
    $a2 = array("a");
    $a3 = array();
    
    echo "a1 is: '".implode("','",$a1)."'<br>";
    echo "a2 is: '".implode("','",$a2)."'<br>";
    echo "a3 is: '".implode("','",$a3)."'<br>";
?>

<?php
//array array_intersect ( array $array1 , array $array2 [, array $... ] )
//Returns an array containing all of the values in array1 whose values exist 
//in all of the parameters.


$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

// Array ( [a] => green [0] => red)

?>


 
