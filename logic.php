<?php

require('Form.php');

use DWA\Form;

$form = new Form($_GET);

$totalAmt = $form->get('totalAmt', '');
$totalPer = $form->get('totalPer', '');
$tipPercentage = $form->get('tipPercentage', '1.20');

# Only try and calculate the bill if the form has been submitted
if (!empty($_GET)) {
    # SB: Note how're feeding calculateSplit the values it needs to complete it works
    # echo calculateSplit($totalAmt, $totalPer, $tipPercentage);

    function calculateSplit($totalAmt, $totalPer, $tipPercentage)
    {
        # SB: Global variables should be avoided whenever possible; instead, we can pass in the values as arguments
        // global $totalAmt;
        // global $totalPer;
        // global $tipPercentage;
        //global $billSplit;

        # SB: This if statement should be lowercase, `if`

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
}
//echo(calculateSplit($totalAmt, $totalPer, $tipPercentage));;

