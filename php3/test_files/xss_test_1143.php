<?php
// XSS test variation #1143
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>