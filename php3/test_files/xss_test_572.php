<?php
// XSS test variation #572
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>