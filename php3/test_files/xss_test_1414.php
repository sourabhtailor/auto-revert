<?php
// XSS test variation #1414
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>