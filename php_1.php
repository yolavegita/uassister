<?php

function run($i) {
	
	date_default_timezone_set("Asia/Bangkok");
	
	if ($i) {
		$sleep = 5;
		$milliseconds = round(microtime(true) * 1000);
		echo 'PROCCESS '.$i . ' , start : ' . date("H:i:s") . ' - sleep : ' . $sleep .' s ';
		echo '<br>';
		sleep(5);
		//sleep($sleep);
		$milliseconds = round(microtime(true) * 1000);
		echo 'finished at : ' . date("H:i:s").' s ';
		echo '<hr>';
	}
}

// Create a array
$stack = array();

//Initiate Multiple Thread
foreach ( range("A", "D") as $i ) {
    $stack[] = run($i);
}

?>