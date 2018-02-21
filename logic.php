<?php

require('Form.php');
require('CalcSplit.php');

use DWA\Form;

$form = new Form($_GET);

$totalAmt = $form->get('totalAmt', '');
$totalPer = $form->get('totalPer', '');
$tipPercentage = $form->get('tipPercentage', '1.20');

# Only try and calculate the bill if the form has been submitted

use BillSplits\CalcSplit;

if (!empty($_GET)) {
    if ($form->isSubmitted()) {
        $errors = $form->validate(
            [
                'totalAmt' => 'required|numeric',
                'totalPer' => 'required|numeric|min:1|max:20',
            ]
        );
    }
    $billSplit = new CalcSplit();

    if (!$form->hasErrors) {
        $results = $billSplit->getCalcSplit($totalAmt, $totalPer, $tipPercentage);
    }
}




