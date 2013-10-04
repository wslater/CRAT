<?php
require_once ('Patient.php');

    class CRATValidator {


        private $errors = array();
        private $patient;

        public function validateData($patient) {

            $this->patient = $patient;

            $this->validateName();
            $this->validateAge();
            $this->validateChol();
            $this->validateHDL();
            $this->validateLDL();
            $this->validateDiastolic();
            $this->validateSystolic();

            return $this->errors;
        }

        private function validateName() {
        $nameError = "";

        if(strlen($this->patient->getName()) >100)
            $nameError = "Name exceeds maximum length allowed";

            $errors["name"] = $nameError;
    }

        private function validateAge() {
        $ageError = "";

        if (!$this->betweenValues(30, 75, $this->patient->getAge()))
            $ageError = "Age must be between 30 and 75";

        $errors["age"] = $ageError;
    }

        private function validateHDL() {
        $hdlError = "";

        if (!$this->betweenValues(0, 500, $this->patient->getHDLCholesterol()))
            $hdlError = "HDL value must be positive";

            $errors["hdlc"] = $hdlError;
    }

        private function validateLDL() {
        $ldlError = "";

        if(!$this->betweenValues(0, 500, $this->patient->getLDLCholesterol()))
            $ldlError = "LDL value must be positive";

            $errors["ldlc"] = $ldlError;
    }

        private function validateChol() {
            $totalCholError = "";

            if(!$this->betweenValues(0, 500, $this->patient->getTotalCholesterol()))
                $totalCholError = "Total cholesterol value must be positive";

            $errors["totalchol"] = $totalCholError;
        }

        private function validateSystolic() {
            $systolicError = "";

            if(!$this->betweenValues(0, 300, $this->patient->getSystolicBloodPressure()))
                $systolicError = "Systolic blood pressure value must be positive";

            $errors["systolic"] = $systolicError;
        }

        private function validateDiastolic() {
            $diastolicError = "";

            if(!$this->betweenValues(0, 300, $this->patient->getDiastolicBloodPressure()))
                $diastolicError = "Diastolic blood pressure value must be positive";

            $errors["diastolic"] = $diastolicError;
        }

        private function betweenValues($min, $max, $value) {
        if($value >= $min && $value <= $max)
            return true;
        else
            return false;
    }

        }


?>