<?php
require_once ('Risk.php');
require_once ('Patient.php');


class PatientRiskCalculator {

    private $patient;
    private $warning;
    private $gender;
    private $risk;

    //Calculates all risks for a patient and returns a risk Object
    public function calculateRisk() {
        
        $this->risk = new Risk();
        $gender = $this->patient->getGender();
        
        $this->smokerRisk();
        $this->ageRisk();
        $this->bpRisk();
        $this->diabetesRisk();
        $this->hdlRisk();
        $this->ldlRisk();
        $this->cholRisk();
        
        return $this->risk;
    }

	//Calculates the risk of a patient based on smoking risk and returns a Risk object
	public function smokerRisk() {
		$isSmoker = $this->patient->getIsSmoker();
		$smokerRisk = new Risk();
		
		if($this->gender = "Male") {	
			if($isSmoker == "True"){
				$smokerRisk->setLdlRisk(2);
				$smokerRisk->setCholRisk(2);
				$this->addRisk($smokerRisk);
			}
			
			else {
				$smokerRisk->setLdlRisk(0);
				$smokerRisk->setCholRisk(0);
                $this->addRisk($smokerRisk);
			}
		}
		//If patient is female
		else {
			if($isSmoker == "True"){
				$smokerRisk->setLdlRisk(2);
				$smokerRisk->setCholRisk(2);
				$this->addRisk($smokerRisk); 
			}
			
			else {
				$smokerRisk->setLdlRisk(0);
				$smokerRisk->setCholRisk(0);
				$this->addRisk($smokerRisk);
			}
			
		}
	}	
	
	//Calculates the risk of a patient based on diabetes risk and $this->addRisk(s a Risk object
	public function diabetesRisk() {
		$diabetesRisk = new Risk;
        $hasDiabetes = $this->patient->getHadDiabetes();
		
		if($this->gender == "Male") {	
			if($hasDiabetes == "True"){
				$diabetesRisk->setLdlRisk(2);
				$diabetesRisk->setCholRisk(2);
				$this->addRisk($diabetesRisk); 
			}
			
			else {
				$diabetesRisk->setLdlRisk(0);
				$diabetesRisk->setCholRisk(0);
				$this->addRisk( $diabetesRisk);
			}
		}
		//If patient is female
		else {
			if($hasDiabetes == "True"){
				$diabetesRisk->setLdlRisk(4);
				$diabetesRisk->setCholRisk(4);
				$this->addRisk( $diabetesRisk); 
			}
			
			else {
				$diabetesRisk->setLdlRisk(0);
				$diabetesRisk->setCholRisk(0);
				$this->addRisk( $diabetesRisk);
			}
			
		}
	}	

	//Calculates the risk of a patient based on their age and $this->addRisk(s a Risk object
	public function ageRisk() {
		$age = $this->patient->getAge();
		$ageRisk = new Risk();
		
		if($this->gender == "Male") {
			if($age > 29 && $age < 35){
				$ageRisk->setRisk(-1);
				$this->addRisk( $ageRisk);
			}
			else if($age >34 && $age < 40) {
				$ageRisk->setRisk(0);
				$this->addRisk( $ageRisk);
			}
			else if($age > 39 && $age < 45) {
				$ageRisk->setRisk(1);
				$this->addRisk( $ageRisk);				
			}
			else if($age > 44 && $age < 50) {
				$ageRisk->setRisk(2);
				$this->addRisk( $ageRisk);
			}
			else if($age >49 && $age < 55) {
				$ageRisk->setRisk(3);
				$this->addRisk( $ageRisk);
			}
			else if($age >54 && $age < 60) {
				$ageRisk->setRisk(4);
				$this->addRisk( $ageRisk);
			}
			else if($age >59 && $age < 65) {
				$ageRisk->setRisk(5);
				$this->addRisk( $ageRisk);
			}
			else if($age >64 && $age < 70) {
				$ageRisk->setRisk(6);
				$this->addRisk( $ageRisk);
			}
			else if($age >69 && $age < 75) {
				$ageRisk->setRisk(7);
				$this->addRisk( $ageRisk);
			}

		
		}
		
		//If patient is female
		else {
			if($age > 29 && $age < 35){
				$ageRisk->setRisk(-9);
				$this->addRisk( $ageRisk);
			}
			else if($age >34 && $age < 40) {
				$ageRisk->setRisk(-4);
				$this->addRisk( $ageRisk);
			}
			else if($age > 39 && $age < 45) {
				$ageRisk->setRisk(0);
				$this->addRisk( $ageRisk);				
			}
			else if($age > 44 && $age < 50) {
				$ageRisk->setRisk(3);
				$this->addRisk( $ageRisk);
			}
			else if($age >49 && $age < 55) {
				$ageRisk->setRisk(6);
				$this->addRisk( $ageRisk);
			}
			else if($age >54 && $age < 60) {
				$ageRisk->setRisk(7);
				$this->addRisk( $ageRisk);
			}
			else if($age >59 && $age < 65) {
				$ageRisk->setRisk(8);
				$this->addRisk( $ageRisk);
			}
			else if($age >64 && $age < 70) {
				$ageRisk->setRisk(8);
				$this->addRisk( $ageRisk);
			}
			else if($age >69 && $age < 75) {
				$ageRisk->setRisk(8);
				$this->addRisk( $ageRisk);
			}

			
		}
		
	}		
	
	//Calculates the risk of a patient based on their ldl cholesterol value and $this->addRisk(s a Risk object			
	public function ldlRisk() {
		$ldlChol = $this->patient->getLDLCholesterol();
		$ldlRisk = new Risk();
		
		if($this->gender == "Male") {
			if($ldlChol <100 && $ldlChol >= 0) {
				$ldlRisk->setLdlRisk(-3);
				$this->addRisk( $ldlRisk); 
			}
			else if($ldlChol > 99 && $ldlChol < 130) {
				$ldlRisk->setLdlRisk(0);
				$this->addRisk( $ldlRisk);
			}
			else if($ldlChol > 129 && $ldlChol < 160) {
				$ldlRisk->setLdlRisk(0);
				$this->addRisk( $ldlRisk);
			}
			else if($ldlChol > 159 && $ldlChol < 190) {
				$ldlRisk->setLdlRisk(1);
				$this->addRisk( $ldlRisk);
			}
			else if($ldlChol > 189) {
				$ldlRisk->setLdlRisk(2);
				$this->addRisk( $ldlRisk);
			}

		}
		//If patient is female
		else {
			if($ldlChol <100 && $ldlChol >= 0) {
				$ldlRisk->setLdlRisk(-2);
				$this->addRisk( $ldlRisk); 
			}
			else if($ldlChol > 99 && $ldlChol < 130) {
				$ldlRisk->setLdlRisk(0);
				$this->addRisk( $ldlRisk);
			}
			else if($ldlChol > 129 && $ldlChol < 160) {
				$ldlRisk->setLdlRisk(0);
				$this->addRisk( $ldlRisk);
			}
			else if($ldlChol > 159 && $ldlChol < 190) {
				$ldlRisk->setLdlRisk(2);
				$this->addRisk( $ldlRisk);
			}
			else if($ldlChol > 189) {
				$ldlRisk->setLdlRisk(2);
				$this->addRisk( $ldlRisk);
			}

		}
	}										  
																				  
	//Calculates the risk of a patient based on their cholesterol value and $this->addRisk(s a Risk object
	public function cholRisk() {
		$totalChol = $this->patient->getTotalCholesterol();
		$cholRisk = new Risk();
		
		if($this->gender == "Male"){
			if($totalChol >= 0 && $totalChol < 160){
				$cholRisk->setCholRisk(-3);
				$this->addRisk( $cholRisk);
			}
			else if($totalChol > 159 && $totalChol < 200) {
				$cholRisk->setCholRisk(0);
				$this->addRisk( $cholRisk);
			}
			else if ($totalChol > 199 && $totalChol < 240) {
				$cholRisk->setCholRisk(1);
				$this->addRisk( $cholRisk);
			}
			else if ($totalChol > 239 && $totalChol < 280) {
				$cholRisk->setCholRisk(2);
				$this->addRisk( $cholRisk);
			}
			else if ($totalChol > 279) {
				$cholRisk->setCholRisk(3);
				$this->addRisk( $cholRisk);
			}

		}
		//If patient is female
		else {
			if($totalChol >= 0 && $totalChol < 160){
				$cholRisk->setCholRisk(-2);
				$this->addRisk( $cholRisk);
			}
			else if($totalChol > 159 && $totalChol < 200) {
				$cholRisk->setCholRisk(0);
				$this->addRisk( $cholRisk);
			}
			else if ($totalChol > 199 && $totalChol < 240) {
				$cholRisk->setCholRisk(0);
				$this->addRisk( $cholRisk);
			}
			else if ($totalChol > 239 && $totalChol < 280) {
				$cholRisk->setCholRisk(1);
				$this->addRisk( $cholRisk);
			}
			else if ($totalChol > 279) {
				$cholRisk->setCholRisk(3);
				$this->addRisk( $cholRisk);
			}

		}
	}

	//Calculates the risk of a patient based on their hdl cholesterol value and $this->addRisk(s a Risk object
	public function hdlRisk() {
		$hdlChol = $this->patient->getHDLCholesterol();
		$hdlRisk = new Risk();
		
		if($this->gender== "Male"){
			if($hdlChol < 35 && $hdlChol >= 0) {
				$hdlRisk->setRisk(2);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 34 && $hdlChol <45) {
				$hdlRisk->setRisk(1);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 44 && $hdlChol <50) {
				$hdlRisk->setRisk(0);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 49 && $hdlChol <60) {
				$hdlRisk->setRisk(0);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 59) {
				$hdlRisk->setLdlRisk(-1);
				$hdlRisk->setCholRisk(-2);
				$this->addRisk( $hdlRisk);
			}

		}
		//If patient is female
		else {
			if($hdlChol < 35 && $hdlChol >= 0) {
				$hdlRisk->setRisk(5);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 34 && $hdlChol <45) {
				$hdlRisk->setRisk(2);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 44 && $hdlChol <50) {
				$hdlRisk->setRisk(1);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 49 && $hdlChol <60) {
				$hdlRisk->setRisk(0);
				$this->addRisk( $hdlRisk);
			}
			else if($hdlChol > 59) {
				$hdlRisk->setLdlRisk(-2);
				$hdlRisk->setCholRisk(-3);
				$this->addRisk( $hdlRisk);
			}

		}
	}

	//Calculates the risk of a patient based on their blood pressure values and $this->addRisk(s a Risk object
	public function bpRisk() {

		$systolicRisk = $this->patient->getSystolicRisk();
		$diastolicRisk = getDiastolicRisk($patient);
		$bpRisk = new Risk();
		
		if($systolicRisk == $diastolicRisk) {
			$bpRisk->setRisk($systolicRisk);
			$this->addRisk( $bpRisk);
		}
		else if($systolicRisk > $diastolicRisk){
			$this->warning = "A discrepancy was found between systolic and diastolic blood pressure values. Systolic values were higher, and are being used.";
			$bpRisk->setRisk($systolicRisk);
			$this->addRisk( $bpRisk);
		}
		else if($systolicRisk < $diastolicRisk){
            $this->warning = "A discrepancy was found between systolic and diastolic blood pressure values. Diastolic values were higher, and are being used.";
			$bpRisk->setRisk($diastolicRisk);
			$this->addRisk( $bpRisk);
		}
		
		
	}

	//Helper function to bpRisk
	public function getSystolicRisk() {
		$systolic = $this->patient->getSystolicBloodPressure();
		
		if($this->gender == "Male"){				
			if($systolic < 120 && $systolic >= 0)
				return 0;
			else if($systolic > 119 && $systolic < 130)
				return 0;
			else if($systolic > 129 && $systolic < 140)
				return 1;
			else if($systolic > 139 && $systolic < 160)
				return 2;
			else if($systolic > 159)
				return 3;
		}
		//If patient is female
		else {
			if($systolic < 120 && $systolic >= 0)
				return -3;
			else if($systolic > 119 && $systolic < 130)
				return 0;
			else if($systolic > 129 && $systolic < 140)
				return 0;
			else if($systolic > 139 && $systolic < 160)
				return 2;
			else if($systolic > 159)
				return 3;
		} 
	}
	
	//Helper function to bpRisk
	public function getDiastolicRisk() {
		$diastolic = $this->patient->getDiastolicBloodPressure();
		
		if($this->gender == "Male"){				
			if($diastolic < 120 && $diastolic >= 0)
				return 0;
			else if($diastolic > 119 && $diastolic < 130)
				return 0;
			else if($diastolic > 129 && $diastolic < 140)
				return 1;
			else if($diastolic > 139 && $diastolic < 160)
				return 2;
			else if($diastolic > 159)
				return 3;
		}
		//If patient is female
		else {
			if($diastolic < 120 && $diastolic >= 0)
				return -3;
			else if($diastolic > 119 && $diastolic < 130)
				return 0;
			else if($diastolic > 129 && $diastolic < 140)
				return 0;
			else if($diastolic > 139 && $diastolic < 160)
				return 2;
			else if($diastolic > 159)
				return 3;
		} 
	}
	



    public function getWarning()
    {
        return $this->warning;
    }

    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    //Adds two Risk objects together
    public function addRisk($newRisk) {
        $templdl = $newRisk->getLdlRisk();
        $tempchol = $newRisk->getCholRisk();
        
        $curldl = $this->risk->getLdlRisk();
        $curchol = $this->risk->getCholRisk();

        $this->risk->setLdlRisk($templdl + $curldl);
        $this->risk->setCholRisk($tempchol + $curchol);
    }
}
?>