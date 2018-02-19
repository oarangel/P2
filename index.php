<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

    <link href='styles.css' rel='stylesheet'>
</head>
<body>

<h1>Bill Splitter</h1>

<form method='GET'>
    <div>
        <label>Enter Bill Amount:
            <input type='text' name='totalAmt' value='<?= sanitize($totalAmt) ?>' required/>
        </label>
    </div>
    <div>
        <label>Enter Number of Persons:
            <input type='text' name='totalPer' value='<?= sanitize($totalPer) ?>' required>
        </label>
    </div>

    <label> Select Tip Percentage, if not selected no Tip will be calculated</label>
    <select name='tipPercentage' id='tipPercentage'>
        <option value='choose'>Choose one...</option>
        <option value='excellentTip' <?php if ($tipPercentage == 'excellentTip') echo 'SELECTED' ?>>20% Excellent Service</option>
        <option value='goodTip' <?php if ($tipPercentage == 'goodTip') echo 'SELECTED' ?>>18% Good Service</option>
        <option value='avgTip' <?php if ($tipPercentage == 'averageTip') echo 'SELECTED' ?>>15% Average Service</option>
    </select>


    <input type='submit' value='Calculate'>


</form>

<?php if (!empty($_GET)) {
 //   echo calculateSplit($totalAmt, $totalPer, $tipPercentage);
} ?>
<?php //echo (calculateSplit($totalAmt, $totalPer, $tipPercentage)); ?>

<?php if (!empty($_GET)): ?>
    <div class='famount'>
        <div class='results'> Amount per Person is: $<?= round(calculateSplit($totalAmt, $totalPer, $tipPercentage)) ?> </div>
    </div>
<?php endif ?>


<footer>
    <a href='http://github.com/oarangel/P2'>View on Github</a>
</footer>

</body>
</html>

