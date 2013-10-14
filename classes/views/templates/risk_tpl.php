<?php
global $view;

?>

Name: <?=$view->getPatient()->getName(); ?> </br>
<?php
if(strlen($view->getWarning()) > 0)
    print($view->getWarning());
?>
LDL Risk: <?=$view->getRisk()->getLdlPercent()?>% </br>
Cholesterol Risk: <?=$view->getRisk()->getCholPercent()?>% </br>

Compare to average percentages: High <?=$view->getRisk()->getAvgPercent('high') ?> <br/>
Mid <?=$view->getRisk()->getAvgPercent('mid') ?> <br/>
Low <?=$view->getRisk()->getAvgPercent('low') ?>
