<?php

#create the words array
$Lorem = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum";
$words = explode ( " ", $Lorem);

#get the number of words:
if (isset($_GET['numWords'])){
	$numWords;
	$numWords = $_GET['numWords'];
}
else{
	$numWords = 4;
}

#validate the number of words doesn't exceed nine
if ($numWords <=9){
	#define the words array
	$rand_keys = array_rand($words, $numWords);
	$password = "";
	for ($i=0; $i<$numWords; $i++){
		$password.= $words[$rand_keys[$i]];
		if ($i!=$numWords-1){
			$password.= "-";
		}
	}


	if (isset($_GET['number'])){
		$password.= rand(0,9);
	}

	if (isset($_GET['symbol'])){
		$password.= "@";
	}



	echo $password;
}

