<?php
// XSS test variation #1490
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>