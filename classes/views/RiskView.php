<?php


class RiskView extends ViewBase {

    private $risk;
    private $patient;
    private $warning;


    public function render() {

        $this->renderPage(CRAT_TEMPLATES.'risk_tpl.php');
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

    public function getWarning() {
        return $this->warning;
    }

}

