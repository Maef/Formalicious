<?php
$formit =& $hook->formit;
$values = $hook->getValues();
$oldValues = $_SESSION['Formalicious_form_'.$formit->config['formid']];

if(!$oldValues) $oldValues = array();

$_SESSION['Formalicious_form_'.$formit->config['formid']] = array_merge($oldValues, $values);

foreach ($_SESSION['Formalicious_form_'.$formit->config['formid']] as $key => $value) {
    $hook->setValue($key, $value);
}

return true;