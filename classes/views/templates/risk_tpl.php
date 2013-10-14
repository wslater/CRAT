<?php
global $view;
$risk = $view->getRisk();
$patient = $view->getPatient();
$warning = $view->getWarning();
?>
        Name: <?=$patient->getName(); ?><br/>

<?php
if(strlen($warning) > 0)
    print($$warning);
?>
LDL Risk: <?=$risk->getLdlPercent()?>%<br/>
Cholesterol Risk: <?=$risk->getCholPercent()?>%<br/>

Compare to average percentages:<br/>
High <?=$risk->getAvgPercent('high') ?>%<br/>
Mid <?=$risk->getAvgPercent('mid') ?>%<br/>
Low <?=$risk->getAvgPercent('low') ?>%<br/>
