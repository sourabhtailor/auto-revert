<?php
// XSS test variation #1429
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>