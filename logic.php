<?php

require('Form.php');

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



    function calculateSplit($totalAmt, $totalPer, $tipPercentage)
    {

        if ($tipPercentage == 'excellentTip') {
            $tipAmt = 1.20;
        } else if ($tipPercentage == 'goodTip') {
            $tipAmt = 1.18;
        } else if ($tipPercentage == 'averageTip') {
            $tipAmt = 1.15;
        } else {
            $tipAmt = 1.0;
        }

        $billSplit = ($totalAmt / $totalPer) * $tipAmt;

        return $billSplit;
    }
//}



