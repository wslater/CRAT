<?php
require_once ('CRATFormView.php');
require_once ('Patient.php');
require_once ('PatientRiskCalculator.php');
require_once ("CRATValidator.php");

class CRATController {



	public function handleRequest($postData) {

        $validator = new CRATValidator();
        $view = new CRATFormView();
        $view->setPostData($postData);

        if (is_array($postData) && count($postData) > 0) {
            
            $patient = new Patient();

            $patient->setName($postData["name"]);
            $patient->setAge($postData["age"]);
            $patient->setGender($postData["gender"]);
            $patient->setDiastolicBloodPressure($postData["diastolic"]);
            $patient->setSystolicBloodPressure($postData["systolic"]);
            $patient->setLDLCholesterol($postData["ldlc"]);
            $patient->setHDLCholesterol($postData["hdlc"]);
            $patient->setTotalCholesterol($postData["totalchol"]);
            $patient->setIsSmoker($postData["smoker"]);
            $patient->setHasDiabetes($postData["diabetes"]);
            $patient->setOnMedication($postData["meds"]);
            
            $formErrors = $validator->validateData($patient);

            $view->setErrors($formErrors);

            if(count($formErrors) == 0) {

                $patientRiskCalculator = new PatientRiskCalculator();
                $patientRiskCalculator->setPatient($patient);

                $risk = $patientRiskCalculator->calculateRisk();
                $warning = $patientRiskCalculator->getWarning();
                $view = new CRATRiskView();

                $view->setWarning($warning);
                $view->setRisk($risk);
                $view->setPatient($patient);

                print($view->render());
            }
        }




		print($view->render());

	}
}
?>
