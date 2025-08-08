<?php
// XSS test variation #873
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>