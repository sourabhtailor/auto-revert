<?php
// XSS test variation #1168
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>