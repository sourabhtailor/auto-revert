<?php
// XSS test variation #602
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>