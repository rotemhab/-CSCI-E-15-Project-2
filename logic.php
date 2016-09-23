<?php

#get the number of words:

if (isset($_GET['numWords'])){
	$numWords;
	$numWords = $_GET['numWords'];
}
else{
	$numWords = 4;
}

#define the words array
$words = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");
$rand_keys = array_rand($words, $numWords);
$password = "";
for ($i=0; $i<$numWords; $i++){
	$password.= $words[$rand_keys[$i]];
	if ($i!=$numWords-1){
		$password.= "-";
	}
}

echo $password;

if (isset($_GET['numWords'])){
	$numWords;
	$numWords = $_GET['numWords'];
}


