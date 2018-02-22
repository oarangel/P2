<?php
require 'helpers.php';

$submitted = $_GET['submitted'] ?? false;
$days = isset($_GET['days']) ? $_GET['days'] : null;

if (!$submitted) {
    $results = '';
} else if (!$days) {
    $results = 'No days were selected';
    $alertType = 'alert-danger';
} else {
    $results = 'Days chosen: ';
    $alertType = 'alert-info';

    foreach ($days as $day) {
        $results .= $day . ', ';
    }

    echo '$results';
    # Remove trailing comma
    $results = rtrim($results, ', ');
}
