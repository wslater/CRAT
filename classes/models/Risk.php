<?php
  class Risk {
      private $ldlRisk;
      private $cholRisk;
      private $ldlpercent;
      private $cholpercent;
      private $avgldlpercent;
      private $avgcholpercent;

      public function setAvgCholPercent($avgcholpercent)
      {
          $this->avgcholpercent = $avgcholpercent;
      }

      public function getAvgCholPercent()
      {
          return $this->avgcholpercent;
      }

      public function setAvgLdlPercent($avgldlpercent)
      {
          $this->avgldlpercent = $avgldlpercent;
      }

      public function getAvgLdlPercent()
      {
          return $this->avgldlpercent;
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
