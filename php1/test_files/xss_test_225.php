<?php
// XSS test variation #225
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>