<?php

$totalAmt = isset($_GET['totalAmt']) ? $_GET['totalAmt'] : '';
$totalPer = isset($_GET['totalPer']) ? $_GET['totalPer'] : '';
$tipPercentage = isset($_GET['tipPercentage']) ? $_GET['tipPercentage'] : '';

function calculateSplit($billSplit = 0.0)
{
    global $totalAmt;
    global $totalPer;
    global $tipPercentage;
    global $billSplit;
    If ($tipPercentage = 'excellentTip') {
        $tipAmt = 1.20;
    } else if ($tipPercentage = 'goodTip') {
        $tipAmt = 1.18;
    } else if ($tipPercentage = 'averageTip') {
        $tipAmt = 1.15;
    }  else {
        $tipAmt = 1.0;
    }
    $billSplit = ($totalAmt / $totalPer) * $tipAmt;
    return $billSplit;
}

echo calculateSplit($totalAmt, $totalAmt,  $tipPercentage);
