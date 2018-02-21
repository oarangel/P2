<?php

require('Form.php');
require('CalcSplit.php');

use BillSplit\CalcSplit;


$billSplit = new CalcSplit();

use DWA\form;


$form = new Form($_GET);

$totalAmt = $form->get('totalAmt', '');
$totalPer = $form->get('totalPer', '');
$tipPercentage = $form->get('tipPercentage', '1.20');

# Only try and calculate the bill if the form has been submitted
if ($form->isSubmitted())
    $errors = $form->validate(
        [
            'totalAmt' => 'required|numeric',
            'totalPer' => 'required|numeric|min:1|max:20',
        ]
    );

if (!$form->hasErrors) {
    $billSplit->getCalcSplit($totalAmt, $totalPer, $tipPercentage);
}




