<?php
// XSS test variation #1126
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>