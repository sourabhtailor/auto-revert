<?php
// XSS test variation #781
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>