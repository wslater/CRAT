<?php
class Patient {
	
	private $name;
	private $age;
	private $gender;
	private $totalCholesterol;
	private $ldlCholesterol;
	private $hdlCholesterol;
	private $isSmoker;
	private $systolicBloodPressure;
	private $diastolicBloodPressure;
	private $onMedication;
	private $hasDiabetes;

	public function getName() {
		return $this->name;
	}
	
	public function setName($newName) {
		$this->name = $newName;
	}
	
	public function getAge() {
		return $this->age;
	}
	
	public function setAge($newAge) {
		$this->age = $newAge;
	}
	
	public function getGender() {
		return $this->gender;
	}
	
	public function setGender($newGender) {
		$this->gender = $newGender;
	}
	
	public function getTotalCholesterol() {
		return $this->totalCholesterol;
	} 
	
	public function setTotalCholesterol($newCholesterol) {
		$this->totalCholesterol = $newCholesterol;
	}
	
	public function getLDLCholesterol() {
		return $this->ldlCholesterol;
	}
	
	public function setLDLCholesterol($newCholesterol) {
		$this->ldlCholesterol = $newCholesterol;
	}
	
	public function getHDLCholesterol() {
		return $this->hdlCholesterol;
	}
	
	public function setHDLCholesterol($newCholesterol) {
		$this->hdlCholesterol = $newCholesterol;
	}
	
	public function getIsSmoker() {
		return $this->isSmoker;
	}
	
	public function setIsSmoker($smoker) {
		$this->isSmoker = $smoker;
	}
	
	public function getSystolicBloodPressure() {
		return $this->systolicBloodPressure;
	}
	
	public function setSystolicBloodPressure($newBP) {
		$this->systolicBloodPressure = $newBP;
	}

	public function getDiastolicBloodPressure() {
		return $this->diastolicBloodPressure;
	}
	
	public function setDiastolicBloodPressure($newBP) {
		$this->diastolicBloodPressure = $newBP;	
	}
	
	public function getOnMedication() {
		return $this->onMedication;
	}
	
	public function setOnMedication($newMed) {
		$this->onMedication = $newMed;
	}
	
	public function getHasDiabetes() {
		return $this->hasDiabetes;
	}
	
	public function setHasDiabetes($diabetes) {
		$this->hasDiabetes = $diabetes;
	}
}
