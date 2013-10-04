<?php


class CRATRiskView {

    private $risk;
    private $patient;
    private $warning;


    public function render() {
        global $view;
        $view = $this;
        include('crat_risk_tpl.php');
    }

    public function getRisk()
    {
        return $this->risk;
    }


    public function setRisk($risk)
    {
        $this->risk = $risk;
    }


    public function getPatient()
    {
        return $this->patient;
    }


    public function setPatient($patient)
    {
        $this->patient = $patient;
    }


    public function setWarning($warning)
    {
        $this->warning = $warning;
    }

}

?>