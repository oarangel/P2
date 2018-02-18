<?php

# Reminder that the logic.php file should no produce any output/display (which it is currently doing).
# Also, I don't think you should be submitting your form to logic.php. Please revisit the notes on form
# design flow: https://github.com/susanBuck/dwa15-spring2018/blob/master/php/forms.md#form-design-flow


# Get the data from the form submission
$totalAmt = isset($_GET['totalAmt']) ? $_GET['totalAmt'] : '';
$totalPer = isset($_GET['totalPer']) ? $_GET['totalPer'] : '';
$tipPercentage = isset($_GET['tipPercentage']) ? $_GET['tipPercentage'] : '1.20';


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

