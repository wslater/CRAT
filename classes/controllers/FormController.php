<?php
require_once (CRAT_VIEWS.'FormView.php');
require_once (CRAT_VIEWS.'RiskView.php');
require_once (CRAT_MODELS.'Patient.php');
require_once (CRAT_UTILS.'PatientRiskCalculator.php');
require_once (CRAT_UTILS.'PatientValidator.php');

class FormController {

	public function handleRequest($postData) {

        $validator = new PatientValidator();
        $view = new FormView();
        $view->setPostData($postData);

        if (is_array($postData) && count($postData) > 0) {
            
            $patient = new Patient();

            $patient->setName(trim($postData["name"]));
            $patient->setAge(trim($postData["age"]));
            $patient->setGender(trim($postData["gender"]));
            $patient->setDiastolicBloodPressure(trim($postData["diastolic"]));
            $patient->setSystolicBloodPressure(trim($postData["systolic"]));
            $patient->setLDLCholesterol(trim($postData["ldlc"]));
            $patient->setHDLCholesterol(trim($postData["hdlc"]));
            $patient->setTotalCholesterol(trim($postData["totalchol"]));
            $patient->setIsSmoker(trim($postData["smoker"]));
            $patient->setHasDiabetes(trim($postData["diabetes"]));
            $patient->setOnMedication(trim($postData["meds"]));
            
            $formErrors = $validator->validateData($patient);

            $view->setErrors($formErrors);

            if(count($formErrors) == 0) {

                $patientRiskCalculator = new PatientRiskCalculator();
                $patientRiskCalculator->setPatient($patient);

                $risk = $patientRiskCalculator->calculateRisk();
                $warning = $patientRiskCalculator->getWarning();
                $view = new RiskView();

                $view->setWarning($warning);
                $view->setRisk($risk);
                $view->setPatient($patient);


            }
        }
        print($view->render());
	}
}

