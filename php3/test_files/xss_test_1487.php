<?php
// XSS test variation #1487
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>