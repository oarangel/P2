<?php

namespace BillSplits;

class CalcSplit
{
    public $billSplits;

    public function getCalcSplit($totalAmt, $totalPer, $tipPercentage)
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

        $this->billSplits = ($totalAmt / $totalPer) * $tipAmt;

        return $this->billSplits;
    }

}

