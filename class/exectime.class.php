<?php 
	class ExecTime {

		private $time;

		function __construct() {
			$this->setTime();
		}

		private function getTime() {
			return $this->time;
		}

	    private function setTime(){
	      $this->time = microtime(TRUE);
	   	}

	   	public function endExec(){
	      	return number_format( microtime(TRUE) - $this->getTime(), 5 ) . ' secs.';
	    }

	    public function memoryUsage() {
	    	return round(((memory_get_peak_usage(true) / 1024) / 1024), 2) . 'Mb';
	    }

	}
?>