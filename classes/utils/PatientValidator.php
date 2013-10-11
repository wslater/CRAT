<?php
require_once (CRAT_MODELS.'Patient.php');

    class PatientValidator {


        private $errors = array();
        private $patient;

        public function validateData($patient) {

            $this->patient = $patient;

            $this->validateName();
            $this->validateAge();
            $this->validateGender();
            $this->validateChol();
            $this->validateHDL();
            $this->validateLDL();
            $this->validateDiastolic();
            $this->validateSystolic();

            return $this->errors;
        }

        private function validateName() {
        $nameError = null;

        if(strlen($this->patient->getName()) >100)
            $nameError = "Name exceeds maximum length allowed";

        if(strlen(trim($this->patient->getName())) == 0)
            $nameError = "Please provide a name";

        if ($nameError)
            $this->errors["name"] = $nameError;
    }

        private function validateAge() {
        $ageError = null;

        if (!($this->betweenValues(30, 75, $this->patient->getAge())))
            $ageError = "Age must be between 30 and 75";

        if ($ageError )
            $this->errors["age"] = $ageError;
    }

        private function validateHDL() {
        $hdlError = null;

        if (!$this->betweenValues(1, 500, $this->patient->getHDLCholesterol()))
            $hdlError = "HDL value must be positive";

            if ($hdlError ) $this->errors["hdlc"] = $hdlError;
    }

        private function validateLDL() {
        $ldlError = null;

        if(!$this->betweenValues(1, 500, $this->patient->getLDLCholesterol()))
            $ldlError = "LDL value must be positive";

            if ($ldlError )
                $this->errors["ldlc"] = $ldlError;
    }

        private function validateChol() {
            $totalCholError = null;

            if(!$this->betweenValues(1, 500, $this->patient->getTotalCholesterol()))
                $totalCholError = "Total cholesterol value must be positive";

            if ($totalCholError )
                $this->errors["totalchol"] = $totalCholError;
        }

        private function validateSystolic() {
            $systolicError = null;

            if(!$this->betweenValues(1, 300, $this->patient->getSystolicBloodPressure()))
                $systolicError = "Systolic blood pressure value must be positive";

            if ($systolicError )
                $this->errors["systolic"] = $systolicError;
        }

        private function validateDiastolic() {
            $diastolicError = null;

            if(!$this->betweenValues(1, 300, $this->patient->getDiastolicBloodPressure()))
                $diastolicError = "Diastolic blood pressure value must be positive";

            if ($diastolicError )
                $this->errors["diastolic"] = $diastolicError;
        }

        private function validateGender() {
            $genderError = null;

            if(strlen($this->patient->getGender()) == 0)
                $genderError = "Please select a gender";

            if ($genderError )
                $this->errors["gender"] = $genderError;

        }

        private function betweenValues($min, $max, $value) {
        if($value >= $min && $value <= $max)
            return true;
        else
            return false;
    }

        }


?>