<?php
// XSS test variation #1117
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>