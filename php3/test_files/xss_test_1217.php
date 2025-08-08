<?php
// XSS test variation #1217
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>