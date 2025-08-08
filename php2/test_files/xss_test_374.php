<?php
// XSS test variation #374
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>