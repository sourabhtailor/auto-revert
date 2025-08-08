<?php
// XSS test variation #1449
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>