<?php
// XSS test variation #286
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>