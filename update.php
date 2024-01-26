<?php
$participant = $_GET['participant'];
$judge1 = $_GET['judge1'];
$judge2 = $_GET['judge2'];

// Validate input (optional)
// Add any additional validation logic here...

// Update the scores in your database or use the values as needed
// In this example, we'll simply display the scores
echo "Participant: $participant<br>";
echo "Judge 1 Score: $judge1<br>";
echo "Judge 2 Score: $judge2<br>";
?>
