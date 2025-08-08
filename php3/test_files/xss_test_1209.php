<?php
// XSS test variation #1209
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>