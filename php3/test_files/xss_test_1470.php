<?php
// XSS test variation #1470
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>