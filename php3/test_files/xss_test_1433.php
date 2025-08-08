<?php
// XSS test variation #1433
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>