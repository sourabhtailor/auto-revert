<?php
// XSS test variation #1322
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>