<?php
//type-1
echo "echo does not require parentheses.<br>";
//type-2
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.<br>';
//type-3
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.<br>';
//type-4
echo "hello <br>";
//type-5
echo "world <br>";
//type-6
echo "hello", "world", "<br>";
//type-7
echo "This string spans multiple lines. The newlines will be output as well";
//type-8
echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";
//type-9
$foo = "example";
echo "foo is $foo <br>"; 
//type-10
$fruits =["lemon", "orange", "banana<br>"];
echo implode(" and ", $fruits); 
//type-11
echo 6 * 7; // 42
?>