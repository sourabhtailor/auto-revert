<?php
// XSS test variation #434
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>