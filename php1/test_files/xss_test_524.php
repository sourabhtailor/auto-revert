<?php
// XSS test variation #524
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>