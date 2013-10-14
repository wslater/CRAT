<?php
  class Risk {
      private $ldlRisk;
      private $cholRisk;
      private $ldlpercent;
      private $cholpercent;
      private $avgpercent;

      public function setAvgPercent($avgpercent)
      {
          $this->avgpercent = $avgpercent;
      }

      public function getAvgPercent($index)
      {
          return $this->avgpercent[$index];
      }

      public function setCholPercent($cholpercent)
  {
      $this->cholpercent = $cholpercent;
  }

      public function getCholPercent()
  {
      return $this->cholpercent;
  }

      public function setLdlPercent($ldlpercent)
  {
      $this->ldlpercent = $ldlpercent;
  }

      public function getLdlPercent()
  {
      return $this->ldlpercent;
  }

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
