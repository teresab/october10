
//fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = "," 

<?php
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

//explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )


$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
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

<?php
//  chunk split - string chunk_split ( string $body [, int $chunklen = 76 [, string $end = 
 // "\r\n" ]] )
//Can be used to split a string into smaller chunks 
 
// format $data using RFC 2045 semantics
$new_string = chunk_split(base64_encode($data));


// need to study this more
?>

<?php
//mixed count_chars ( string $string [, int $mode = 0 ] )
//Counts the number of occurrences of every byte-value 
// (0..255) in string and returns it in various ways.

<?php
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
   
}
?>

<?php
//htmlentities
//string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 
// [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

// all characters which have HTML character entity equivalents are translated 
//into these entities.

<?php
$href = htmlEntities($_GET['a']);
print "<body bgcolor='$href'>"; # results in: <body bgcolor='#000' 
onload='alert(document.cookie)'>

?>



<?php

//htmlspecialchars_decode This function is the opposite of htmlspecialchars().


$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

?>


<?php
//specialcharaters Convert special characters to HTML entities
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>


<?php
//lcfirst — Make a string's first character lowercase

<?php
$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld

$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);             // hELLO WORLD!
$bar = lcfirst(strtoupper($bar)); // hELLO WORLD!
?>

<?php
//ltrim — Strip whitespace (or other characters) from the beginning of a string

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the beginning of $binary
// (from 0 to 31 inclusive)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);

?>

<?php
//md5 Calculates the MD5 hash of str using the » 
//RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash. 


$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
?>


<?php
//rtrim — Strip whitespace (or other characters) from the end of a string

function strrtrim($message, $strip) {
    // break message apart by strip string
    $lines = explode($strip, $message);
    $last  = '';
    // pop off empty strings at the end
    do {
        $last = array_pop($lines);
    } while (empty($last) && (count($lines)));
    // re-assemble what remains
    return implode($strip, array_merge($lines, array($last)));
}

?> 


<?php
//str_replace — Replace all occurrences of the search string with the replacement string
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

// Provides: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
?>


<?php
//str_split — Convert a string to an array

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);//every third

print_r($arr1);
print_r($arr2);

?>


<?php
//stripos stripos — Find the position 
//of the first occurrence of a case-insensitive substring in a string
 
$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// Nope, 'a' is certainly not in 'xyz'
if ($pos1 === false) {
    echo "The string '$findme' was not found in the string '$mystring1'";
}

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' is the 0th (first) character.
if ($pos2 !== false) {
    echo "We found '$findme' in '$mystring2' at position $pos2";
}
?>


<?php 
//strtolower — Make a string lowercase

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
?>


<?php
//trim — Strip whitespace (or other characters) from the beginning and end of a string


$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>

<?php
//add slashes

<?php
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);
?>



