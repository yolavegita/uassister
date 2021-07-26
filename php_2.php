<?php

class AsyncOperation extends Thread {

    public function __construct($arg) {
        $this->arg = $arg;
    }

    public function run() {
		
		date_default_timezone_set("Asia/Bangkok");
		
        if ($this->arg) {
            $sleep = 5;
			$milliseconds = round(microtime(true) * 1000);
            echo 'PROCCESS '.$this->arg . ' , start : ' . date("H:i:s") . ' - sleep : ' . $sleep .' s ';
			echo '<br>';
			sleep(5);
            //sleep($sleep);
			$milliseconds = round(microtime(true) * 1000);
            echo 'finished at : ' . date("H:i:s").' s ';
			echo '<hr>';
        }
    }
}

// Create a array
$stack = array();

//Initiate Multiple Thread
foreach ( range("A", "D") as $i ) {
    $stack[] = new AsyncOperation($i);
}

// Start The Threads
foreach ( $stack as $t ) {
    $t->start();
}

?>