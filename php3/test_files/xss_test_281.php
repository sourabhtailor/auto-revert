<?php
// XSS test variation #281
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>