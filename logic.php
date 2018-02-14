<?php

# Version 1
//if (isset($_GET['searchTerm'])) {
//    $searchTerm = $_GET['searchTerm'];
//} else {
//    $searchTerm = '';
//}

# Version 2
$totalAmt = isset($_GET['totalAmt']) ? $_GET['totalAmt'] : '';
$totalPer = isset($_GET['totalPer']) ? $_GET['totalPer'] : '';
$tipIncluded = isset($_GET['tipIncluded']) ? true : false;
$tipPercentage = isset($_GET['tipPercentage']) ? $_GET['tipPercentage'] : '';




