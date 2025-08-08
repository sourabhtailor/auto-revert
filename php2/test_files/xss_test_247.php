<?php
// XSS test variation #247
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>