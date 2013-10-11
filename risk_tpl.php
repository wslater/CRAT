<?php
global $view;
?>

Name: <?=$this->patient->getName(); ?> </br>
<?php
if(strlen($this->warning) > 0)
    print($this->warning);
?>
LDL Risk: <?=$this->risk->getLdlRisk()?> </br>
Cholesterol Risk: <?=$this->risk->getCholRisk()?> </br>
