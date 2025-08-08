<?php
// XSS test variation #1317
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>