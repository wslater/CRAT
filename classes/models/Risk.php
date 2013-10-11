<?php
  class Risk {
  	private $ldlRisk;
	private $cholRisk;
	
	public function setLdlRisk($newRisk) {
		$this->ldlRisk = $newRisk;
	}
	
	public function getLdlRisk() {
		return $this->ldlRisk;
	}
	
	public function setCholRisk($newRisk) {
		$this->cholRisk = $newRisk;
	}
	
	public function getCholRisk() {
		return $this->cholRisk;
	}
	
        //Sets both ldlRisk and cholRisk for efficiency 
	public function setRisk($newRisk) {
		$this->ldlRisk = $newRisk;
		$this->cholRisk = $newRisk;
	}
  }
