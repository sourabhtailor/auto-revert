<?php
// XSS test variation #1366
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>