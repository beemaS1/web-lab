<?php

$students = array("beema", "shifna", "fathima", "ciyana");

echo "<h2>Array Before sorting:</h2>";
print_r($students);

echo "<br><br>";

asort($students);
echo "<h2>Arrat After Ascending Sorting (asort):</h2>";
print_r($students);

echo "<br><br>";

asort($students);
echo "<h2>Array After Decsending Sorting (arsort):</h2>";
print_r($students);
?>
