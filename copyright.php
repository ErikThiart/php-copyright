// Easy single date

&copy; <?php echo date("Y"); ?> Copyright.

// Advanced start and end date

&copy; <?php
$copyYear = 2008; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> Copyright.
